<?php
session_start();
$name = $_SESSION["usuario"];

if (!isset($_SESSION["usuario"])) {
    header("Location: index.html");
    exit();
}

if ($_SESSION["rol"] == "user") {
    header("Location: user.html");
    exit();
}


//echo "<h1>  hola $name</h1>";

//echo "<a herf='logout.php'>Cerrar sesion</a>";
?>

<html>
    <body>
        <h1>Bienvenido </h1>
        <a href="../controllers/logout.php">Cerrar sesion</a>
    </body>
</html>