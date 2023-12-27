<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Sistema online de nota para alunos</title>
<meta name="keywords" content="sistema para professores, calculo de nota média para alunos, sistema de notas com envio pelo Whatsapp, media de notas pelo whatsapp, sistema online de nota">
</head>
<body>

<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
        <h1>Sistema online de nota para alunos</h1>
        <p>Estou disponibilizando um sistema para auxiliar professores a calcular notas médias de seus alunos e enviar por whatsapp, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
        <p><a href="index.php">Voltar</a> | <a href="sistema-notas-aluno.php">Refazer</a></p>
    </div>
    
    <!-- 
    ## Veja como funciona ##

    
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

    <div class="col">
        
        <div id="faixa-exercicio">
            <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
                <p>Use apenas numeros</p>
                <input class="form-control" name="MTdaarea" type="text" placeholder="Tamanho em M² da Área" />
                <input class="form-control" name="vrdalata" type="text" placeholder="Valor da lata de tinta" />
                <input class="form-control" name="ltdalata" type="text" placeholder="Quantidade de litros na lata" />
                <input class="form-control" name="quantdemao" type="text" placeholder="Quantidade de demãos" />
                <input class="btn btn-primary" type="submit" value="Mostrar Resultado" />
            </form>
    
            <div id="faixa-resultado"  style="text-align:center;">
                Você precisará de <small style="color:red;"><?php echo $NumLatasFinal; ?></small> latas. Incluimos 10% a mais.<br/>O valor total a pagar é de: <small style="color:red;"><?php echo 'R$'.$valorTotalComDemaos; ?></div>
            </div>
            
        </div>
    
    </div>
</div>
</body>
</html>
