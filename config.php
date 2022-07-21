<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuarioregistro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
    $contraseñaregistro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

    $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuarioregistro'");
    $contraseña = password_hash($contraseñaregistro, PASSWORD_BCRYPT);
    echo "NO SE PUDO!";
    $ingreso = mysqli_query($conexion,"INSERT INTO usuarios (usuario, contraseña) VALUES ("$usuario","$contraseña")");
    echo "SE PUDO!";
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
