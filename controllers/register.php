<?php
    include("conexion.php");

    $user = $_POST["user"];
    $password = $_POST["pass"];
    $password_confirmation = $_POST["password_confirmation"];

    if ($password != $password_confirmation) {
        header("Location: ../views/registro.php?error=La contraseña no coincide con la confirmacion");
    }

    $query = "INSERT INTO usuarios (user,password,rol) VALUES ('$user','$password','user')" ;

    mysqli_query($conexion, $query);


?>