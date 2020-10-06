<?php
require_once 'connection.php'; 
 require_once 'function.php'; 
try{
 
if
( isset($_POST['gg']) && isset($_POST['rating']) && isset($_POST['name']) && isset($_POST['message']) && isset($_POST['email'])) 
 {
 
  
    $link = mysqli_connect("localhost", "root", "", "Games")
        or die("Ошибка " . mysqli_error($link)); 
     

    $gg = htmlentities(mysqli_real_escape_string($link, $_POST['gg']));
    $rt = htmlentities(mysqli_real_escape_string($link, $_POST['rating']));
    $nm = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
    $ms = htmlentities(mysqli_real_escape_string($link, $_POST['message']));
    $em = htmlentities(mysqli_real_escape_string($link, $_POST['email']));

    
     
    $b = "select id_game from Game where name_game = '$gg' ";
    $resultb = mysqli_query($link,$b);
    $elementb = mysqli_fetch_assoc($resultb);

        foreach($elementb as $elb)
        {
        
        }  

       
        $user_result = mysqli_query($link,"select id_user from Users where username = '$nm'");
        $User_element = mysqli_fetch_assoc($user_result);
        if($User_element){
        foreach ($User_element as $urel)
        {

        }
        
        }
        else
        echo 'нужно зарегистрироваться';
       
     $true_email = get_users();
     foreach($true_email as $true)
     {  
      if( $em == $true['email_user']){

          $query ="insert into Review values (default,'$elb','$urel','$rt','$ms')";
          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
          if($result)
          {
             header('location: contact.php');
          }
      }
      else
      echo'Sowwy';
      
     }
        
   

 
    mysqli_close($link);
    }
}
catch(Exception $e) {
        echo 'Выброшено исключение: ',  $e->getMessage(), "\n";}

?>