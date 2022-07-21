<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuarioregistro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
    $contraseñaregistro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));
    $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuarioregistro'");
    $contraseña = password_hash($contraseñaregistro, PASSWORD_BCRYPT);

    $ingreso = "INSERT INTO usuarios (usuario, contraseña) VALUES (:usuario,:contraseña)";
    echo "Lo Tenemos???";
    $resultado = mysqli_query($conexion, $ingreso);
    echo "Lo Tenemos!!!";

    if ($resultado) {
      echo "BIENVENIDO, TE HAS REGISTRADO CORRECTAMENTE";
    } else {
      echo "NO SE REGISTRO CORRECTAMENTE";
    }
  } else {
    echo "COMPLETA LOS DATOS";
  }
}

mysqli_close($conexion);
?>
