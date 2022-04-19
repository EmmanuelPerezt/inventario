<?php
    session_start();
    if( isset($_SESSION['user']) && isset($_SESSION['type']) ){
        header('Location: views/inicio/inicio.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./css/styles/login/login.css">
        <title>Document</title>
    </head>
    <body>
        <header>
            
        </header>
        <main>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-8 offset-2 formulario">
                        <div class="row">
                            <div class="col-10 offset-1">
                                <!-- Nombre de usurio -->
                                <div class="row mb-3">
                                    <div class="col-12 text-center">
                                        <label for="user">
                                            <b>Nombre de usuario</b>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" id="user" class="form-control">
                                    </div>
                                </div>
                                <!-- Contraseña -->
                                <div class="row mb-5">
                                    <div class="col-12 text-center">
                                        <label for="pass">
                                            <b>Contraseña</b>
                                        </label>
                                    </div>
                                    <div class="col-12">
                                        <input type="password" id="pass" class="form-control">
                                    </div>
                                </div>
                                <!-- alert -->
                                <div class="alert alert-danger mb-5" role="alert" id="alert">
                                    <label id="mensaje"></label>
                                </div>
                                 <!-- Iniciar sesion -->
                                 <div class="row mb-3">
                                    <div class="col-12 col-lg-4 offset-0 offset-lg-8">
                                        <input type="button" id="iniSesion" class="btn btn-primary form-control" value="Iniciar sesión">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
        </footer>
    </body>
    <script src="./js/bootstrap/bootstrap.min.js"></script>
    <script src="./js/jquery/jquery.js"></script>
    <script src="./js/scripts/login/login.js"></script>
</html>