<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gerador de Links do WhatsApp</title>
<meta name="keywords" content="gerador link whatsapp, gerador link wa, link whatsapp, botão whatsapp para site, codigo botao whatsapp">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

<div id="conteudo">
    <h1>Gerador de Links do WhatsApp</h1>

    <p>Olá, estou disponibilizando este sistema online com o objetivo de gerar um link facil para whatsapp, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>

<p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="lkswhatsapp.php">Refazer</a></p>

    <div id="faixa-exercicio">
        <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
            <p>Use apenas numeros incluindo o DDD</p>
            <input name="linkwa" type="text" placeholder="Telefone com DDD" /><br/>
            <input type="submit" value="Gerar Link" /><br/>
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            
<?php 

    $LinkWA = $_POST['linkwa'] ?? null;

    if($LinkWA == false){
        echo "Esperando você colocar o numero";
    } else{
        echo "Copie esta URL: https://wa.me/55" . $LinkWA . " <br/>ou " . "<a href='https://wa.me/55$LinkWA'>" . "clique para abrir a conversa" . "</a>";
    }
    
?>
    
    </div>    
</div>
</body>
</html>
