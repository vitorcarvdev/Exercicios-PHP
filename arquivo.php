<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistemas em PHP para uso gratuito | Apps Vitor Carvalho</title>
<meta name="keywords" content="sistema em php, sistema gratuito em php, desenvolvedor php">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

<div id="conteudo">

<?php
if (isset($_SESSION['id']) == true) {
    
    include("conteudo-arquivo.php");

} else{echo "<small>Você não deveria estar aqui <a href='autenticacaousers.php'>vá embora!</a></small>";}
?>

<?php
include("rodape.php");
?>