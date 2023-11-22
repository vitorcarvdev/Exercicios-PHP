<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gerador de Links do WhatsApp</title>
<meta name="keywords" content="gerador senha, gerador password, senha dificil, ideia de senha, gerador de codigo">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

<div id="conteudo">
    <h1>Gerador de Senhas</h1>

    <p>Olá, estou disponibilizando este sistema online com o objetivo de gerar um link facil para whatsapp, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>

<p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="geradorsenhas.php">Refazer</a></p>

    <div id="faixa-exercicio">
        <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
            <p>Deseja uma senha de quantos caracteres?</p>
            <input name="NCaracteres" type="text" value="12" /><br/>
            <input type="submit" value="Gerar Senha" /><br/>
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            
<?php
$NumeroCarac = $_POST['NCaracteres'];

$caracteres = array('1','2','3','*','4','5','!', '@','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','*','t','u','v','w','x','y','z', '6', '7', '8', '9', '0','#', '%','A','B','C','D','E','*','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','&','*',';');

$misturar = array_rand($caracteres, $NumeroCarac);

for($cont = 0; $cont < $NumeroCarac; $cont++){
   echo $caracteres[$misturar["$cont"]];
}

?>

</div>    
</div>
</body>
</html>
