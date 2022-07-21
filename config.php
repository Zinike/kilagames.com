<?php

require "conexion.php";

if (isset($_POST['login-register'])) {
  if (strlen($_POST['usuario']) >= 3 && strlen($_POST['contraseña']) >= 8) {

    // ELIMINACION DE ESPACIO CON TRIM
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);
    echo "USUARIO Y CONTRASEÑA TOMADO <br>";

    // ELIMINACION DE INJECCION (" OR 1=1#)
    if ($usuario && $contraseña){
        $usuario_clear = mysqli_real_escape_string($conexion, $usuario);
        $contraseña_clear = mysqli_real_escape_string($conexion, $contraseña);
        echo "USUARIO Y CONTRASEÑA LIMPIOS <br>";

    if ($usuario_clear && $contraseña_clear) {
        $cotejamiento = "SELECT * FROM usuarios WHERE usuario='$usuario_clear'";
        $usuario = mysqli_query($conexion, $cotejamiento);
        $contraseña_codificada = password_hash($contraseña_clear, PASSWORD_BCRYPT);
        echo "USUARIO Y CONTRASEÑA LISTOS <br>";

    if ($usuario && $contraseña_codificada){
        $ingreso_db = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario','$contraseña_codificada')";
        $resultado = mysqli_query($conexion, $ingreso_db);
        echo "PRUEBA";
        if ($resultado){
          echo "USUARIO Y CONTRASEÑA REGISTRADOS";
        }
      }
    }
  }
}
// CIERRE DE LA CONEXION
mysqli_close($conexion);
?>
