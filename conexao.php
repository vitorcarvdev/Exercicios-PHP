<?php
$servidorLocal = "localhost";
$usuarioDB = "vitorcar_torvik";
$senhaDB = "3tfGE?q*eqM7";
$database = "vitorcar_sis";

$mysqli = new mysqli($servidorLocal, $usuarioDB, $senhaDB, $database);

if($mysqli->error){
    die("Sem conexo com o banco de dados" . $mysqli->error);
}

//echo "<small><b>Status:</b> Conectado ao BD</small>";
?>