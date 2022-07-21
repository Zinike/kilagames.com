<?php

require('conexion.php');

session_start();

if (isset($_POST['register'])) {

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $contraseña_hash = contraseña_hash($contraseña, contraseña_BCRYPT);

    $query = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");
    $query->bindParam("usuario", $uduario, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios(usuario,contraseña) VALUES (:usuario,:contraseña_hash)");
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam("contraseña_hash", $contraseña_hash, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo '<p class="success">Your registration was successful!</p>';
        } else {
            echo '<p class="error">Something went wrong!</p>';
        }
    }
}

?>
mysqli_close($conexion);
?>
