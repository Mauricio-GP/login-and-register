<?php
    session_start();

    include('../controllers/conexion.php');    
    
    $usuario = $_POST["user"];  
    $password = $_POST["pass"];
    
    $sql = "SELECT * FROM usuarios WHERE user ='$usuario'" AND "password = '$password'";

    $result = mysqli_query($conexion, $sql);

    while($row = mysqli_fetch_array($result)){
        $usuar = $row["user"];
        $pass = $row["pass"];
        $rol = $row["rol"];
    }
    if($result->num_rows > 0){
        $_SESSION["usuario"] = $usuar;
        $_SESSION["rol"] = $rol;
        header('Location: ../views/panel.php');
    }else {
        echo "Usuario o Contraseña incorrecta";
    }

?> 