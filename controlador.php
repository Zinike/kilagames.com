<?php

include("conexion.php");

if (isset($_POST["login-button"])) {
  if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1){
    /*$nombre = trim($_POST['nombre');
    $apellido = trim($_POST['apellido']);
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);
    $consulta = "INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `contraseña`) VALUES (NULL, '$nombre', '$apellido', '$usuario', '$contraseña');"
    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
    } else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
        <?php
    }
  }
}

?>
