<?php

include("conexion.php");

if (isset($_POST['login-register'])) {
    if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

      //ELIMINACION DE ESPACIO CON TRIM
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);

      // ELIMINACION DE INJECCION (" OR 1=1#)
      $usuario = mysqli_real_escape_string($conn, $usuario);
	    $contraseña = mysqli_real_escape_string($conn, $contraseña);

      // VERIFICAION DE DUPLICACION DE USUARIO
      $contejamiento = "SELECT FROM usuarios  WHERE usuario=$usuario";
      $verificar_usuario = mysqli_query($conexion,$cotejamiento);

      $contraseña = password_hash($contraseña, password_BCRYPT);

      // INGRESO DE USUARIO Y CONTRASEÑA A LA BD
	    $consulta = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contraseña')";
	    $resultado = mysqli_query($conexion,$consulta);

	    if ($resultado) {
	    	?>
	    	<div class="contenedor"><p>¡Te has registrado correctamente!</p></div>
        <?php
	    }
      else {
	    	?>
	    	<div class="contenedor"><p>¡Ups ha ocurrido un error!</p></div>
        <?php
	    }
    }
    else {
	    	?>
	    	<div class="contenedor"><p>¡Por favor complete los campos!</p></div>
        <?php
    }
}
mysqli_close($conexion);
?>
