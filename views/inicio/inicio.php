<?php
    session_start();
    if( !(isset($_SESSION['user'])) && !(isset($_SESSION['type'])) ){
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
        <link rel="stylesheet" href="../../css/styles/incio.css">
        <link rel="stylesheet" href="../../images/icons/bootstrap-icons.css">
        <title>Document</title>
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
                    <!-- busqueda -->
                    <div class="col-12 form-control mb-4">
                        <div class="row mb-4 mt-2">
                            <div class="col-12">
                                <h2>Búsqueda</h2>
                            </div>
                            <div class="col-12">
                                <div class="input-group">
                                    <input id="busqueda" type="text" class="form-control" placeholder="Buscar un producto">
                                    <button class="input-group-text btn-primary bi bi-search" id="buscar"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- productos -->
                    <div class="col-12 form-control">
                        <div class="row mb-4 mt-2">
                            <!-- Titulo y agregar -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-10">
                                        <h2>Productos</h2>  
                                    </div>
                                    <div class="col-2">
                                        <button type="button" class="btn btn-primary form-control bi bi-plus-lg" data-bs-toggle="modal" data-bs-target="#agregarProductoModal"> Nuevo producto</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="agregarProductoModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Agregar nuevo producto</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <!-- Codigo -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Código</span>
                                                        <input id="codigo" type="text" class="form-control" placeholder="Codigo del producto">
                                                    </div>
                                                </div>
                                                <!-- Nombre -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Nombre</span>
                                                        <input id="nombre" type="text" class="form-control" placeholder="Nombre del producto">
                                                    </div>
                                                </div>
                                                <!-- Stock -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Stock</span>
                                                        <input id="stock" type="number" class="form-control" placeholder="Cantidad de stock">
                                                    </div>
                                                </div>
                                                <!-- Precio -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Precio</span>
                                                        <input id="precio" type="text" class="form-control" placeholder="Precio unitario">
                                                    </div>
                                                </div>
                                                <!-- Descripción -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Descripción</span>
                                                        <input id="descripcion" type="text" class="form-control" placeholder="Descripción del producto">
                                                    </div>
                                                </div>
                                                <!-- Cede -->
                                                <div class="col-12 mb-3">
                                                    <div class="input-group" id=cedeDiv>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" id="guardar" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tabla -->
                            <div class="col-12">
                                <div class="row">
                                    <div id="productosTableDiv" class="col-12">
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
    <script src="../../js/scripts/inicio/inicio.js"></script>
</html>