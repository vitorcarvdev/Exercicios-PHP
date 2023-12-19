<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Sistemas em PHP para uso gratuito | Apps Vitor Carvalho</title>
<meta name="keywords" content="sistema em php, sistema gratuito em php, desenvolvedor php">
<title>Sistemas em PHP para uso gratuito | Apps Vitor Carvalho</title>
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