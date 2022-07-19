<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);

	    $consulta = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contraseña')";

	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3>¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3>¡Ups ha ocurrido un error!</h3>
        <?php
	    }
    } else {
	    	?>
	    	<h3>¡Por favor complete los campos!</h3>
        <?php
    }
}

?>
