<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Gerador de Links do WhatsApp</title>
<meta name="keywords" content="gerador link whatsapp, gerador link wa, link whatsapp, botão whatsapp para site, codigo botao whatsapp">
</head>
<body>

<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
        <h1>Gerador de Links do WhatsApp</h1>
        <p>Olá, estou disponibilizando este sistema online com o objetivo de gerar um link facil para whatsapp, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
        <p><a href="index.php">Voltar</a> | <a href="lkswhatsapp.php">Refazer</a></p>
    </div>
    
    <div class="col">
        <div id="faixa-exercicio">
            <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
                <p>Use apenas numeros incluindo o DDD</p>
                <input class="form-control" name="linkwa" type="text" placeholder="Telefone com DDD" />
                <input class="btn btn-primary" type="submit" value="Gerar Link" />
            </form>

            <div id="faixa-resultado" style="text-align:center; margin:0px auto;">
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
    </div>
    
</body>
</html>
