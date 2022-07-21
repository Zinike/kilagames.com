<?php
require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

      $usuarioregistro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
      $contraseñaregistro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

      if ($usuarioregistro && $contraseñaregistro) {
        $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuarioregistro'");
        $contraseña = password_hash($contraseñaregistro, PASSWORD_BCRYPT);
      }
      elseif ($usuario && $contraseña) {
        $ingreso = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario','$contraseña')";
        $resultado = mysqli_query($conexion, $ingreso);
        echo "prueba";
      if ($resultado) {
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
}

mysqli_close($conexion);
?>
