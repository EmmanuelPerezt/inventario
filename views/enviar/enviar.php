<?php
    session_start();
    if( !isset($_SESSION['user']) && !isset($_SESSION['type']) ){
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
                        
                    </div>
                </div>
            </div>
        </main>
    </body>
    <script src="../../js/bootstrap/bootstrap.min.js"></script>
    <script src="../../js/jquery/jquery.js"></script>
    <script src="../../js/scripts/usuarios/usuarios.js"></script>
</html>