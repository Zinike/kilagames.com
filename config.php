<?php

include("conexion.php");
if($conn){
  echo "todo bien";
}
if (isset($_POST['register'])) {
    if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1) {
	    $name = trim($_POST['usuario']);
	    $email = trim($_POST['contraseña']);
	    $consulta = "INSERT INTO usuarios(nombre, email) VALUES ('$usuario','$contraseña')";
	    $resultado = mysqli_query($conexion,$consulta);
	    if ($resultado) {
	    	?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?>
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?>
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
