<?php
    function get_game($limit, $offset){
      global $link;
      $sql= "select * from Game limit $limit offset $offset";
      $result= mysqli_query($link,$sql);
      $book = mysqli_fetch_all($result, MYSQLI_ASSOC); 
      return $book;
   }
   

function get_games(){
  global $link;
  $sql= "select * from Game";
  $result= mysqli_query($link,$sql);
  $games = mysqli_fetch_all($result, MYSQLI_ASSOC); 
  return $games;
}


   function get_all_games(){
    global $link;
    $sql= "select * from VeiwGame";
    $result= mysqli_query($link,$sql);
    $game = mysqli_fetch_all($result, MYSQLI_ASSOC); 
    return $game;
   }

function get_users(){
  global $link;
  $sql= "select * from users";
  $result= mysqli_query($link,$sql);
  $readers = mysqli_fetch_all($result, MYSQLI_ASSOC);

return $readers;
}


 ?>         