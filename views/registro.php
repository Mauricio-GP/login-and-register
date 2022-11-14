<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
  <div 
    class="bg-white p-5 rounded-5 text-secondary shadow" 
    style="width: 25rem"
    >
    <div class="d-flex justify-content-center">
        <img 
            src="../assets/salago-icon.svg" 
            alt="login-icon" 
            style="height: 3rem"
            />
    </div>
    <div>
        <div class="text-center fs-1 fw-bold">Registrarse</div>
      
    </div>
    <div>
        <?php
            if(isset($_GET['error'])) {
                echo '<div class="alert alert-danger">'.$_GET['error'].'</div>';
            }
        ?>
    </div>
    <form action="../controllers/register.php" method="POST">
    <div class="input-group mt-4">
        <div class="input-group-text bg-dark">
           <img 
            src="../assets/username-icon.svg" 
            alt="username-icon" 
            style="height: 1rem"
            >
        </div>
            <input 
            type="text" 
            name="user" 
            class="form-control bg-light"  
            placeholder="Usuario">
    <div class="input-group mt-1">
        <div class="input-group-text bg-dark">
           <img 
            src="../assets/password-icon.svg" 
            alt="password-icon" 
            style="height: 1rem"
            />
        </div>
            <input 
            type="password" 
            name="pass" 
            class="form-control bg-light"  
            placeholder="Contraseña">
    <div class="input-group mt-1">
            <div class="input-group-text bg-dark">
                <img 
                    src="../assets/password-icon.svg" 
                    alt="password-icon" 
                    style="height: 1rem"
                    />
                </div>
                <input 
                    class="form-control bg-light"
                    type="password" 
                    name="password_confirmation"   
                    placeholder="Confirmacion de Contraseña"/>
        </div>
                    <button type="submit" class="btn btn-dark text-while w-100 mt-4 fw-semibold shadow-sm">Registrarse</button>
                    <div class="d-flex gap-1 justify-content-center mt-1">
                    <div>Tengo una cuenta</div>
                        <a href="../index.php" class="text-decoration-none text-info fw-semibold"
                        >Iniciar Sesión</a
                > 

                </div>                
            </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>
</body>
</html>