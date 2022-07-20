<?php

include("conexion.php");

if (isset($_POST['login-register'])) {
    if (!empty()$_POST['usuario']) && strlen($_POST['contraseña']) >= 8) {

      // ELIMINACION DE ESPACIO CON TRIM
	    $usuario = trim($_POST['usuario']);
	    $contraseña = trim($_POST['contraseña']);

      // ELIMINACION DE INJECCION (" OR 1=1#)
      $usuario = mysqli_real_escape_string($conn, $usuario);
	    $contraseña = mysqli_real_escape_string($conn, $contraseña);

      // VERIFICAION DE DUPLICACION DE USUARIO
      $contejamiento = "SELECT FROM usuarios  WHERE usuario=$usuario";
      $usuario_verificado = mysqli_query($conexion,$cotejamiento);

      // ENCRIPTACIONB DE CONTRASEÑA

      $contraseña_encriptada = password_hash($contraseña, PASSWORD_BCRYPT);

      // INGRESO DE USUARIO Y CONTRASEÑA A LA BD
	    $consulta = "INSERT INTO usuarios(id, usuario, contraseña) VALUES (NULL,'$usuario_verificado','$contraseña_encriptada')";
	    $resultado = mysqli_query($conexion,$consulta);
    }
}
mysqli_close($conexion);
?>
