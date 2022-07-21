<?php

require('conexion.php');

session_start();

if (isset($_POST['register'])) {

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña_hash = contraseña_hash($contraseña, contraseña_BCRYPT);

    $query = $conexion->prepare("SELECT * FROM usuarios WHERE usuario=:usuario");
    $query->bindParam("usuario", $uduario, PDO::PARAM_STR);
    $query->execute();

    if ($query->rowCount() > 0) {
        echo 'The usuario is already registered!';
    }

    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO usuarios(usuario,contraseña) VALUES (:usuario,:contraseña_hash)");
        $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
        $query->bindParam("contraseña_hash", $contraseña_hash, PDO::PARAM_STR);
        $result = $query->execute();

        if ($result) {
            echo 'Your registration was successful!';
        } else {
            echo 'Something went wrong!';
        }
    }
}

mysqli_close($conexion);
?>
