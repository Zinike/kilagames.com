<?php
require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

      $usuario = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
      $contraseña = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

      if ($usuario && $contraseña) {
        $usuariov = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");
        $contraseña_codificada = password_hash($contraseña, PASSWORD_BCRYPT);
      }
      elseif ($usuariov AND $contraseña_codificada) {
        $ingreso = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuariov','$contraseña_codificada')";
        $resultado = mysqli_query($conexion, $ingreso);
        echo "prueba";
      }
      elseif ($resultado) {
          echo "BIENVENIDO '$usuariov' TE HAS REGISTRADO CORRECTAMENTE";
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
