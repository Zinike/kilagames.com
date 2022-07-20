<?php

require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 4 && strlen($_POST['contraseña']) >= 8) {


    // ELIMINACION DE ESPACIO CON TRIM
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);


    // ELIMINACION DE INJECCION (" OR 1=1#)
    $usuario = mysqli_real_escape_string($conn, $usuario);
    $contraseña = mysqli_real_escape_string($conn, $contraseña);


    // VERIFICAION DE DUPLICACION DE USUARIO
    $contejamiento = "SELECT FROM usuarios WHERE usuario=$usuario";
    $usuario_verificado = mysqli_query($conexion,$cotejamiento);


    // ENCRIPTACION DE CONTRASEÑA
    $contraseña = password_hash($contraseña, PASSWORD_BCRYPT);


    // INGRESO DE USUARIO Y CONTRASEÑA A LA BD
    $consulta = "INSERT INTO `usuarios`(usuario, contraseña) VALUES ('$usuario_verificado','$contraseña')";
    $resultado = mysqli_query($conexion,$consulta);

    if ($resultado) {
    	?>
    	<div class="contenedor"><p>¡Te has registrado correctamente!</p></div>
      <?php
    } else {
    	?>
    	<div class="contenedor"><p>¡Ups ha ocurrido un error!</p></div>
      <?php
    }
  } else {
  ?>
  <div class="contenedor"><p>¡Por favor complete los campos!</p></div>
  <?php
  }
}
mysqli_close($conexion);
?>
