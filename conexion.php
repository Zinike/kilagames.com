<?php
$conn = mysqli_connect("localhost","u523579628_kilagames","KilaGames1","u523579628_juegos");
if(!$conn){
  echo "Connection error: " . mysqli_connect_error();
}

$peliculas= "SELECT * FROM peliculas";
$peliculaslimited= "SELECT * FROM peliculas LIMIT 5";

$pclimited = "SELECT * FROM pc LIMIT 5";
$pc = "SELECT * FROM pc";

$usuario = "SELECT * FROM usuario";
?>
