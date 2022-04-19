<?php
    session_start();
    if( isset($_SESSION['user']) || isset($_SESSION['type']) ){
        unset($_SESSION['user']);
        unset($_SESSION['type']);
        unset($_SESSION['id']);
        session_destroy();
    }
    header('Location: ../../index.php');
?>