<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuario_registro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
    $contraseña_registro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

    $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario_registro'");
    $ccontraseña = password_hash($contraseña_registro, PASSWORD_BCRYPT);
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
