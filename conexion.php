<?php
$conn = mysqli_connect("localhost","u523579628_kilagames","KilaGames1","u523579628_juegos");
if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$pc = "SELECT * FROM `pc`";
$pclimited = "SELECT * FROM `pc` LIMIT 5";

?>
