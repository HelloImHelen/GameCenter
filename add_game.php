<?php
require_once 'connection.php'; 
 require_once 'function.php'; 
 
if
(isset($_POST['name_game']) && isset($_POST['category_game']) && isset($_POST['photo_game']) && isset($_POST['cost_game'])) 
 {
 
  
    $link = mysqli_connect("localhost", "root", "", "Games")
        or die("Ошибка " . mysqli_error($link)); 
     

    $name_game = htmlentities(mysqli_real_escape_string($link, $_POST['name_game']));
    $cat_game = htmlentities(mysqli_real_escape_string($link, $_POST['category_game']));
    $photo_game = htmlentities(mysqli_real_escape_string($link, $_POST['photo_game']));
    $cost_game = htmlentities(mysqli_real_escape_string($link, $_POST['cost_game']));
 

          $query ="insert into Game values (default,'$name_game','$cat_game','$photo_game','$photo_game')";
          $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
          if($result)
          {
             header('location: admin.php');
          }
   
      else {
      echo'Sowwy';
    }
      
 
    mysqli_close($link);
} 

?>