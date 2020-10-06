<?php 

require_once 'connection.php';

if(isset($_POST['login']) and isset($_POST['psw']))
{
    $login = $_POST['login'];
    $pass = $_POST['psw'];


    $sql = "select * from Users where username = '$login' and pass = '$pass'";
    $result = mysqli_query($link,$sql) or die (mysqli_error($link));
    $count = mysqli_num_rows($result);

    if($count ==1)
    {
        $_SESSION['login'] = $login;
    }
    else{
        $fms = "Ошибка";
    }

}

if(isset($_SESSION['login'])){
    if($login=='admin' )
    {
        echo"<div id='cssmenu' class='align-center'>";
        echo " <ul>";
        echo "	<li class='last'><a href='#'><span>".$login."</span></a></li>";
        echo "	<li class='last'><a href='logout.php'><span>Logout</span></a></li>";
        echo "	<li class='last'><a href='admin.php'><span>4Admin</span></a></li>";
        echo " </ul>";
       include 'index.php';
    }
    else{
    echo"<div id='cssmenu' class='align-center'>";
   echo " <ul>";
    echo "	<li class='last'><a href='#'><span>".$login."</span></a></li>";
    echo "	<li class='last'><a href='logout.php'><span>Logout</span></a></li>";
    echo " </ul>";
   include 'index.php';  
    }
}
?>