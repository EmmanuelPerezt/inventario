<a class="btn btn-light bi bi-list" data-bs-toggle="offcanvas" href="#menuPrincipal" role="button" aria-controls="menuPrincipal">
    Menú principal
</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="menuPrincipal" aria-labelledby="menuPrincipalLabel">
    <div class="offcanvas-header">
        <div class="row">
            <div class="col-12">
                <h1 class="bi bi-list">
                    Menu principal
                </h1>
            </div>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-12 mb-4">
                <h3 class="bi bi-house">
                    <a href="../inicio/inicio.php">Inicio</a>
                </h3>
            </div>
            <div class="col-12 mb-4">
                <h3 class="bi bi-send">
                    <a href="../enviar/enviar.php">Enviar a</a>
                </h3>
            </div>
            <div class="col-12 mb-4">
                <h3 class="bi bi-clock-history">
                    <a href="#">Historial</a>
                </h3>
            </div>
            <?php if( $_SESSION['type'] == 1 ) { ?>
                <div class="col-12 mb-4">
                    <h3 class="bi bi-people">
                        <a href="../usuarios/usuarios.php">Usuarios</a>
                    </h3>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="bi bi-shop">
                        <a href="../cedes/cedes.php">Cedes</a>
                    </h3>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="bi bi-card-list">
                        <a href="../movimientos/catalogo_movimientos.php">Movimientos</a>
                    </h3>
                </div>
            <?php } ?>
            <div class="col-12 mb-4">
                <h3 class="bi bi-gear" >
                    <a href="#">Configuración</a>
                </h3>
            </div>
            <div class="col-12 mb-4">
                <h3 class="bi bi-box-arrow-left">
                    <a href="../cerrar_sesion/cerrar_sesion.php">Cerrar sesión</a>
                </h3>
            </div>
        </div>
    </div>
</div>