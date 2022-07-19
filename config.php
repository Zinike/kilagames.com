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
mysqli_free_result($resultado);
mysqli_close($conn);
?>
