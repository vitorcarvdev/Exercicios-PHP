<?php
    if(!isset($_SESSION)) { // session_start mantem usuario
        session_start();
    }
    session_destroy();
    header("Location: autenticacaousers.php");
?>