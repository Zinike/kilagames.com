<?php
$conexion = mysqli_connect("localhost","u523579628_kilagames","KilaGames1","u523579628_juegos");
if(!$conexion){
  echo "Connection error: " . mysqli_connect_error();
}

$pc = "SELECT * FROM pc";
$pclimited = "SELECT * FROM pc LIMIT 5";

$peliculas= "SELECT * FROM peliculas";
$peliculaslimited= "SELECT * FROM peliculas LIMIT 5";
?>
