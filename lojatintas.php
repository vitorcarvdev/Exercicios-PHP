<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cálculo de tinta por metro quadrado</title>
<meta name="keywords" content="Calculo de tinta, tinta por metro quadrado, online">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>

<body>

<?php

?>

<div id="conteudo">
    <h1>Cálculo de uso de tinta por metro quadrado</h1>

    <p>Olá, estou disponibilizando este sistema online com o objetivo de calcular a quantidade de tinta por metros quadrados, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
    
    <!-- 
    
    ## Veja como funciona ##

    1 litro de tinta pinta = 6M²
    Uma lata com 18L pintaria - 108M²
    Uma lata com 1,6 pintaria - 21,6M²

    ## Exemplo pratico ##
    200M² / 6M² (que é a area de tinta para 1 litro) = 33,33 litros necessarios para pintar os 200M²

    ## Calculo considerando latas de 18 e 3,6 litros ##
    33,3 / 18L = 1,85 latas (arredondando para cima = 2 latas de 18 litros) 2 * R$80 (valor de cada lata) = R$160
    33,3 / 3,6 = 9,25 latas (arredondar para cima = 10 latas de 3,6 litros) 10 * R$25 (valor de cada lata) = R$250

    -->

    <?php 

    $MTdaArea = $_POST['MTdaarea'] ?? null;
    $vrdaLata = $_POST['vrdalata'] ?? null;
    $ltdaLata = $_POST['ltdalata'] ?? null;
    $quantdeDemao = $_POST['quantdemao'];

    $PorcErro = 10; // acrescimo de (10%) de tinta

    if($MTdaArea == 0.0){
        $ltdaLata = 0;
        $QuantLatas = 0;
        
    } else{
        $QuantLatas = $MTdaArea/$ltdaLata;
        $QuantLatas10 = $QuantLatas+($QuantLatas / 100 * $PorcErro.'%');
        $NumLatasFinal = (int)$QuantLatas10;
        $quantdeDemao = (int)$quantdeDemao;

        $valorTotal = $NumLatasFinal*$vrdaLata;
        $valorTotalComDemaos = $valorTotal*$quantdeDemao;
        $valorTotalComDemaos = number_format($valorTotalComDemaos, 2, ',', '.');
        #echo $valorTotalComDemaos;
    }

    ?>
   
    
<p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="lojatintas.php">Refazer</a></p>

    <div id="faixa-exercicio">
        <form id="form-caculadora" method="post" style="text-align:center;">
            <p>Use apenas numeros</p>
            <input name="MTdaarea" type="text" placeholder="Tamanho em M² da Área" /><br/>
            <input name="vrdalata" type="text" placeholder="Valor da lata de tinta" /><br/>
            <input name="ltdalata" type="text" placeholder="Quantidade de litros na lata" /><br/>
            <input name="quantdemao" type="text" placeholder="Quantidade de demãos" /><br/>
            <input type="submit" value="Mostrar Resultado" /><br/>
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            Você precisará de <?php echo $NumLatasFinal; ?> latas. Incluimos 10% a mais que o necessário de tinta para ter uma sobra.<br/>O valor total a pagar é de: <?php echo 'R$'.$valorTotalComDemaos; ?> 
        </div>
    </div>    
</div>
</body>
</html>
