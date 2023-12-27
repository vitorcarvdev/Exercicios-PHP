<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Gerador de Links do WhatsApp</title>
<meta name="keywords" content="gerador senha, gerador password, senha dificil, ideia de senha, gerador de codigo">
</head>
<body>

<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
        <h1>Gerador de Senhas</h1>
        <p>Olá, estou disponibilizando este sistema online com o objetivo de gerar senhas fortes, em caso de sugestões envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
        <p><a href="index.php">Voltar</a> | <a href="geradorsenhas.php">Refazer</a></p>
    </div>
    
    <div class="col">
    <div id="faixa-exercicio">
        <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
            <p>Gerar uma senha de quantos caracteres?</p>
            <input class="form-control"  name="NCaracteres" type="text" value="20" /><br/>
            <input type="submit" class="btn btn-primary" value="Gerar Senha" /><br/>
        </form>

        <div id="faixa-resultado" style="text-align:center">
            
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
    </div>
</body>
</html>
