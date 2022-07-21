<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='mysqli_real_escape_string($conexion, trim($_POST['usuario']))'");
    $contraseña = password_hash(mysqli_real_escape_string($conexion, trim($_POST['contraseña'])), PASSWORD_BCRYPT);

    $ingreso = mysqli_query($conexion,"INSERT INTO usuarios (usuario, contraseña) VALUES ("$usuario","$contraseña")");

    if ($ingreso) {
      echo "BIENVENIDO, TE HAS REGISTRADO CORRECTAMENTE";
    } else {
      echo "NO SE REGISTRO CORRECTAMENTE";
    }
  } else {
    echo "COMPLETA LOS DATOS";
  }
}
?>
