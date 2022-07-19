<?php

include("conexion.php");

if (isset($_POST["login-button"])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1){
    $nombre = trim($_POST['nombre');
    $apellido = trim($_POST['apellido']);
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);

    $consulta = "INSERT INTO usuarios(nombre,apellido,usuario,contraseña) VALUES ('$nombre','$apellido','$usuario','$contraseña')";

    $resultado = mysqli_query($conexion,$consulta);

    if ($resultado) {
      ?>
        <h3>¡Gracias por unirte!</h3>
      <?php
      }
      else {
      ?>
        <h3>¡Upps! Algo salió mal</h3>
      <?php
    }
  }
}

?>
