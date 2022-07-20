<?php

require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 4 && strlen($_POST['contraseña']) >= 8) {

    // ELIMINACION DE ESPACIO CON TRIM
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);


    // ELIMINACION DE INJECCION (" OR 1=1#)
    $usuario_clear = mysqli_real_escape_string($conexion, $usuario);
    $contraseña_clear = mysqli_real_escape_string($conexion, $contraseña);


    // VERIFICAION DE DUPLICACION DE USUARIO
    $cotejamiento = "SELECT * FROM usuarios WHERE usuario='$usuario_clear'";
    $usuario_verificado = mysqli_query($conexion,$cotejamiento);
    // CODIFICACION DE CONTRASEÑA
    $contraseña_codificada = password_hash($contraseña_clear, PASSWORD_BCRYPT);


    // INGRESO DE USUARIO Y CONTRASEÑA A LA BD
    $consulta = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario_verificado','$contraseña_codificada')";
    $resultado = mysqli_query($conexion, $consulta);


    // RESPUESTAS
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

// CIERRE DE LA CONEXION
mysqli_close($conexion);
?>
