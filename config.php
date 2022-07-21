<?php
require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

      $usuario = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
      $contraseña = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

      if ($usuario && $contraseña) {
        $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
        $contraseña = password_hash($contraseña, PASSWORD_BCRYPT);
      }
      elseif ($usuario AND $contraseña) {
        $ingreso = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario','$contraseña')";
        $resultado = mysqli_query($conexion, $ingreso);
        echo "prueba";
      }
      elseif ($resultado) {
          echo "BIENVENIDO '$usuario' TE HAS REGISTRADO CORRECTAMENTE";
      }
      else {
        echo "NO SE REGISTRO CORRECTAMENTE";
      }
  }
  else {
    echo "COMPLETA LOS DATOS";
  }
}

mysqli_close($conexion);
?>
