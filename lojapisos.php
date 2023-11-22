<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cálculo de pisos por metro quadrado</title>
<meta name="keywords" content="Calculo de piso, piso por metro quadrado, online, calculadora de m2, metro quadrado">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

<?php

?>

<div id="conteudo">
    <h1>Cálculo de uso de pisos por metro quadrado</h1>

    <p>Olá, estou disponibilizando este sistema online com o objetivo de calcular a quantidade de pisos por metros quadrados, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
    
    <!-- 
    
    ## Veja como funciona ##

    Cada caixa de piso tem = 1M²
    Cada saco de argamassa faz - 1M²

    ## Exemplo pratico ##
    200M² / 10,00 (Custo de cada caixa de piso) = 22 caixas de piso

    22 Caixas X 10,00 = R$220,00
    22 Sacos de argamassa a 10,00 = R$220,00
    Total piso + argamassa = R$440,00

    -->

    <?php 

    $MTdaArea = $_POST['MTdaarea'] ?? null;
    $vrdoPiso = $_POST['vrdopiso'] ?? null;
    $vrArgamassa = $_POST['vrargamassa'] ?? null;

    $PorcErro = 10; // acrescimo de (10%) de tinta

    if($MTdaArea == 0.0){
        $vrdoPiso = 0;
        $vrArgamassa = 0; // 13,00
        
    } else{
        $QuantPisos = $MTdaArea/$vrdoPiso; //200 / 15,00 = 13,33
        $QuantPisos10 = $QuantPisos+($QuantPisos / 100 * $PorcErro.'%'); //1,3 = 
        $QuantPisosFinal = (int)$QuantPisos10; // 15 caixas

        $valorTotal = $QuantPisosFinal*$vrdoPiso; // 15 caixas x 15,00 = 225
        $valordaArgamassa = $vrArgamassa*$QuantPisosFinal; // 13,00 x 15 caixas piso = 195,00
        $valorTotalPisoArgamassa = $valorTotal+$valordaArgamassa;
        $valorTotalPisoArgamassa = number_format($valorTotalPisoArgamassa, 2, ',', '.');
        $valorTotal= number_format($valorTotal, 2, ',', '.');
    }

    ?>
   
    
<p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="lojapisos.php">Refazer</a></p>

    <div id="faixa-exercicio">
        <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
            <p>Use apenas numeros</p>
            <input name="MTdaarea" type="text" placeholder="Tamanho em M² da Área" /><br/>
            <input name="vrdopiso" type="text" placeholder="Valor M² do piso" /><br/>
            <input name="vrargamassa" type="text" placeholder="Valor argamassa 5kg" /><br/>
            <input type="submit" value="Mostrar Resultado" /><br/>
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            Você precisará de <?php echo $QuantPisosFinal; ?> caixas de piso. Incluimos 10% a mais que o necessário para ter uma sobra.<br/>O valor total a pagar é de: <?php echo 'R$'.$valorTotal; ?>. Se incluir a argamassa o valor total é de: <?php echo 'R$'.$valorTotalPisoArgamassa; ?>  
        </div>
    </div>    
</div>
</body>
</html>
