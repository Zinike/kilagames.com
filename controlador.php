<?php
include("conexion.php");

if (isset($_POST["login-button"])){
  if (empty($_POST["usuario"]) and empty($_POST["contraseña"])) {
    ?>
    <div><p>RELLENAR LOS CAMPOS</p></div>
    <?php
  } else {
    $usuario = trim$_POST["usuario"];
    $contraseña = trim$_POST["contraseña"];

    $consulta = "INSERT INTO usuarios(nombre,apellido,usuario,contraseña) VALUES ('$nombre','$apellido','$usuario','$contraseña')"

    $resultado = mysqlquery($conexion, $consulta);

    if ($resultado) {
      ?>
      <h3>¡Gracias por unirte!</h3>
      <?php
    } else {
      ?>
      <h3>Paso algo mal</h3>
      <?php
    }
  }
}
?>
