<?php

include("conexion.php");

if (isset($_POST['login-register'])) {
    if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);

      $usuario = mysqli_real_escape_string($conexion, $usuario);
	    $contraseña = mysqli_real_escape_string($conexion, $contraseña);

	    $consult = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contraseña')";

	    $result = mysqli_query($conexion,$consult);
	    if ($result) {
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

?>
