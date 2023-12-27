<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Cálculo de compra de pisos por metro quadrado (M²)</title>
<meta name="keywords" content="Calculo de piso, piso por metro quadrado, online, calculadora de m2, metro quadrado">
</head>
<body>


<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
        <h1>Cálculo de compra de pisos por M²</h1>
        <p>Olá, estou disponibilizando este sistema online com o objetivo de calcular a quantidade de pisos por metros quadrados, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
        <p><a href="index.php">Voltar</a> | <a href="lojapisos.php">Refazer</a></p>
    </div>
    
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
   
    <div class="col">
        
        <div id="faixa-exercicio">
            <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
                <p>Use apenas numeros</p>
                <input class="form-control" name="MTdaarea" type="text" placeholder="Tamanho em M² da Área" />
                <input class="form-control" name="vrdopiso" type="text" placeholder="Valor M² do piso" />
                <input class="form-control" name="vrargamassa" type="text" placeholder="Valor argamassa 5kg" />
                <input class="btn btn-primary" type="submit" value="Mostrar Resultado" />
            </form>
    
            <div id="faixa-resultado" style="text-align:center;">
                Você precisará de <small style="color:red;"><?php echo $QuantPisosFinal; ?></small> caixas de piso. Incluimos 10% a mais.<br/>O valor total a pagar é de: <small style="color:red;"><?php echo 'R$'.$valorTotal; ?></small>. Se incluir a argamassa o total é: <small style="color:red;"><?php echo 'R$'.$valorTotalPisoArgamassa; ?></small> 
            </div>
        </div>
        
    </div>
    
</div>
</body>
</html>
