<?php include_once './librerias/librerias.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de cuentas</title>
    <link rel="stylesheet" href="./estilos/login.css">
</head>
<body>
    <div class="container container-form">
        <form class="formulario">
            <center><h3 class="titulo">Iniciar sesión</h3></center>
             <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label label">Usuario</label>
                    <label class="float-end"><i class="fa-solid fa-user"></i></label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label label">Contraseña</label>
                <label class="float-end"><i class="fa-solid fa-key"></i></label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <center><a href="./vistas/cuentasActivas.php" class="btn btn-primary w-25">Entrar     <i class="fa-solid fa-arrow-right-to-bracket"></i></a></center>
        </form> 
    </div>

    
</body>
</html>