<?php
require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);

    if ($usuario && $contraseña) {
        $usuario_clear = mysqli_real_escape_string($conexion, $usuario);
        $contraseña_clear = mysqli_real_escape_string($conexion, $contraseña);
      }
      elseif ($usuario_clear && $contraseña_clear) {
        $usuariov = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario_clear'");
        $contraseña_codificada = password_hash($contraseña_clear, PASSWORD_BCRYPT);
      }
      elseif ($usuariov AND $contraseña_codificada) {
        $ingresodb = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuariov','$contraseña_codificada')";
        $resultado = mysqli_query($conexion, $ingresodb);
        echo "prueba";
      }
      elseif ($resultado) {
          echo "USUARIO Y CONTRASEÑA REGISTRADOS";
      }
      else {
        echo "NO SE REGISTRO CORRECTAMENTE";
      }
  }
  else {
    echo "COMPLETA LOS DATOS";
  }
} echo "HOLA";

mysqli_close($conexion);
?>
