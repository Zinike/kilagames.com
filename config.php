<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

      $usuarioregistro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
      $contraseñaregistro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

      echo "hasta ahora todo bien / ";

      if ($usuarioregistro && $contraseñaregistro) {
        $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuarioregistro'");
        $contraseña = password_hash($contraseñaregistro, PASSWORD_BCRYPT);
        echo "Vamos! / ";
      }else
      if ($usuario && $contraseña) {
        $ingreso = "INSERT INTO usuarios (usuario, contraseña) VALUES (:usuario,:contraseña)";
        echo "Lo Tenemos???";
        $resultado = $ingreso->execute();
        echo "Lo Tenemos!!!";

      if ($resultado) {
          echo "BIENVENIDO, TE HAS REGISTRADO CORRECTAMENTE";
      } else {
        echo "NO SE REGISTRO CORRECTAMENTE";
      }
    }
  }
}

mysqli_close($conexion);
?>
