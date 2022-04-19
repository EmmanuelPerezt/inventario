<?php
    session_start();
    if( !(isset($_SESSION['user'])) && !(isset($_SESSION['type'])) && $_SESSION['type'] != 1 ){
        header('Location: ../../index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/styles/cedes/cedes.css">
        <link rel="stylesheet" href="../../images/icons/bootstrap-icons.css">
        <title>Cedes</title>
    </head>
    <body>
        <header>
            <?php
                include("../shared/navbar.php");
            ?>
        </header>
        <main class="container">
            <div class="row" style="margin-top:35px;">
                <div class="col-lg-12">
                    <!--barra de busqueda-->
                    <div class="row"> 
                        <div class="btn-group col-lg-12">
                            <div class="col-lg-8 offset-lg-2">
                                <input type="text" id="txtbuscar" class="form form-control" placeholder="Buscar cede">
                            </div>
                            <div class="col-lg-2">
                                <input type="button" value="Buscar" id="btnbuscar" class="btn btn-primary form-control">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Cedes -->
                    <div class="row">
                        <!--Mostrar todas las cedes-->
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12" id="tablacedes">
                                    <!--Aqui se mostrarán las cedes -->
                                </div>
                            </div>
                        </div>
                        <!--Agregar nueva cede-->
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <input type="text" id="txtagregar" class="form form-control" placeholder="Añadir nueva cede" maxlength="100">
                                </div>
                                <div class="col-lg-4">
                                    <input type="button" class="btn btn-secondary form-control" id ="btnagregar" value="Agregar">
                                </div>
                            </div>
                            <hr>
                            <!-- mensajes -->
                            <div class="row" id="mensajes" style="display:none;">
                                <div class="col-lg-12">
                                    <div class="alert" role="alert" id="alert">
                                        <label id="mensaje"></label>
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
    <script src="../../js/scripts/cedes/cedes.js"></script>
</html>