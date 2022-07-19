<?php
include(c"onexion.php");

if (isset($_POST["login-button"])){
  if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
    echo '<div class="error"><p>RELLENAR LOS CAMPOS</p></div>'
  } else {
    $usuario = trim$_POST["usuario"];
    $contraseña = trim$_POST["contraseña"];
    $sql = $conexion->query("SELECT * from  `usuarios` WHERE usuario='$usuario' AND contraseña='$contraseña'");
    if ($datos=sql->fetch_object()) {
      header("location:index.php");
    } else {
      echo '<div class="error"><p>ACCESO DENEGADO</p></div>';
    }
  }

}

?>
