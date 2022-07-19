<?php

include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);

	    $consulta = "INSERT INTO usuarios(usuario, contraseña) VALUES ('$usuario','$contraseña')";

	    $resultado = mysqli_query($conn,$consulta);
	    if ($resultado) {
	    	?>
	    	<p>¡Te has registrado correctamente!</p>
        <?php
	    } else {
	    	?>
	    	<p>¡Ups ha ocurrido un error!</p>
        <?php
	    }
    } else {
	    	?>
	    	<p>¡Por favor complete los campos!</p>
        <?php
    }
}

?>
