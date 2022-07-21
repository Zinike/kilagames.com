<?php
require "conexion.php";

session_start();

if (isset($_POST['register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    $usuarioregistro = mysqli_real_escape_string($conexion, trim($_POST['usuario']));
    $contraseñaregistro = mysqli_real_escape_string($conexion, trim($_POST['contraseña']));

    $usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuarioregistro'");
    $contraseña = password_hash($contraseñaregistro, PASSWORD_BCRYPT);

    $peticion = "INSERT INTO usuarios (usuario, contraseña) VALUES (:usuario,:contraseña)";
    echo "va queriendo";
    $ingreso = mysqli_query($conexion, $peticion);
    echo "Lo Tenemos!!!";

    if ($ingreso) {
      echo "BIENVENIDO '$usuario', TE HAS REGISTRADO CORRECTAMENTE";
    } else {
      echo "NO SE REGISTRO CORRECTAMENTE";
    }
  } else {
    echo "COMPLETA LOS DATOS";
  }
}
mysqli_free_result($ingreso);
mysqli_close($conexion);
?>
