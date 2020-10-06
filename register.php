<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reg.css">

    <title>Document</title>
</head>
<body>
<?php require_once 'connection.php';


if(isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['email']) && isset($_POST['fio'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $fio = $_POST['fio'];

    $sql = "insert into Users value (default,'$username','$pass','$fio','$email')";
    $result = mysqli_query($link,$sql);

    if($result)
        {
            $smsg="Регистрация прошла успешно";
            header('location: index.php');
        }
        else
        $flsmsg = "Error";


}

?>



<div class="wrapper">
  <div class="header">
    <h3 class="sign-in">Register</h3>
    <?php if(isset($smsg)){ ?> <div role="alert"> <?php echo $smsg; ?> </div> <?php } ?> 
    <?php if(isset($flsmsg)){ ?> <div role="alert"> <?php echo $flsmsg; ?> </div> <?php } ?> 
  </div>
  <form action="#" method="POST">
    <input class="user-input" type="text" name="username" id="username" placeholder="My username is"  />
    <input type="password" name="pass" id="pass" placeholder="Password" />
    <input class="user-input" type="text" name="email" id="email" placeholder="Email" />
    <input class="user-input"type="text" name="fio" id="fio" placeholder="FIO" />
    <input type="submit" value="Register" />
    </div>
    </div>
  </form>  
</div>

</body>
</html>