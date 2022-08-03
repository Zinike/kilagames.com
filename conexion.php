<?php
$conexion = mysqli_connect("localhost","u523579628_kilagames","KilaGames1","u523579628_juegos");
if(!$conexion){
  echo "Connection error: " . mysqli_connect_error();
}

$pc = "SELECT * FROM pc ORDER BY `pc`.`id` DESC";
$pclimited = "SELECT * FROM `pc` ORDER BY `pc`.`id` DESC LIMIT 5";

$peliculas= "SELECT * FROM peliculas ORDER BY `peliculas`.`id` DESC";
$peliculaslimited= "SELECT * FROM peliculas ORDER BY `peliculas`.`id` DESC LIMIT 5";

$programas= "SELECT * FROM programas ORDER BY `programas`.`id` DESC";
$programaslimited= "SELECT * FROM programas ORDER BY `programas`.`id` DESC LIMIT 5";
?>
