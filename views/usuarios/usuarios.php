<?php
    session_start();
    if( !(isset($_SESSION['user'])) && !(isset($_SESSION['type'])) && $_SESSION['type'] != 1 ){
        header('Location: ../../index.php');
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
        <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/styles/inicio/inicio.css">
        <link rel="stylesheet" href="../../images/icons/bootstrap-icons.css">
        <title>Usuarios y personas</title>
    </head>
    <body>
        <header>
            <?php
                include("../shared/navbar.php");
            ?>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Seccion titulo -->
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="row">
                                    <div class="col-12 mb-4 mt-4">
                                        <h1>
                                            <b>Usuarios y personas</b>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Seccion usuarios y personas -->
                        <div class="row">
                            <!-- Crear agregar personas -->
                            <div class="col-6 mb-5">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h3>
                                            <b>Agregar nuevas personas</b>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nombres de la persona -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="name">Nombre(s)</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="nombre(s)">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorName" for="name"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Apellidos de la persona -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="lastnames">Apellido(s)</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12">
                                                <input type="text" name="lastnames" id="lastnames" class="form-control" placeholder="apellido(s)">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorLastnames" for="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Cede donde pertenece -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="cedetype">Cede</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12" id="cedetypeDiv">

                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorCedetype" for="cedetype"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Boton -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- button -->
                                            <div class="col-12">
                                                <button id="savePers" class="btn btn-primary form-control">Agregar nueva persona</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Agregar usuarios -->
                            <div class="col-6 mb-5">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h3>
                                            <b>Crear nuevos usuarios</b>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nombre de usuario -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="username">Nombre de usuario</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12">
                                                <input type="text" name="username" id="username" class="form-control" placeholder="nombre de usuario">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorUsername" for="username"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Correo electronico -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="email">Correo electrónico</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12">
                                                <input type="mail" name="email" id="email" class="form-control" placeholder="username@hostname.com">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorEmail" for="email"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contrasenia -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="password">Contraseña</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12">
                                                <input type="password" name="password" id="password" class="form-control" placeholder="contraseña">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorPassword" for="password"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tipo de usuario -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- label -->
                                            <div class="col-12">
                                                <label for="usertipe">Tipo de usuario</label>
                                            </div>
                                            <!-- input -->
                                            <div class="col-12" id="usertipeDiv">
                                            </div>
                                            <!-- mensaje de error -->
                                            <div class="col-12">
                                                <label id="errorUsertipe" for="usertipe"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Boton -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <!-- button -->
                                            <div class="col-12">
                                                <button id="saveUser" class="btn btn-primary form-control">Crear nuevo usuario</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Enlazar usuarios y personas -->
                            <div class="col-12 mt-5">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <h3>
                                            <b>Asignar cuentas a personas</b>
                                        </h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Tabla -->
                                    <div class="col-12 mb-3">
                                        <div class="row">
                                            <div class="col-12" id="personasDiv">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="../../js/bootstrap/bootstrap.min.js"></script>
    <script src="../../js/jquery/jquery.js"></script>
    <script src="../../js/scripts/usuarios/usuarios.js"></script>
</html>