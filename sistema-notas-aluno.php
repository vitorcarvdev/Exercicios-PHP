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
    /*
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
    */
    ?>

    <div class="col row">
        
        <div id="faixa-exercicio">
            <form id="form-vitor" class="form-padrao loja" method="GET" style="text-align:center;">

                <p><b>Matérias e Notas</b></p>

                <div class="col-12">
                    <input class="form-control" name="qntmater" type="number" placeholder="Quantidade de Máterias" />
                    <input class="btn btn-primary" type="submit" value="Gerar Materias" />
                </div>

                    <?php
                    $qntmater = $_GET["qntmater"];

                    $i = 1;
                    while($i <= $qntmater)
                    {
                        echo "
                        <div class='col-6'>
                            <input class='form-control' name='mat$i' type='text' placeholder='Materia' />
                        </div>
                        <div class='col-6'>
                            <input class='form-control' name='nota$i' type='text' placeholder='Nota' />
                        </div>
                        ";
                        $i++; 
                    }
                    
                ?>

                <p><b>Dados do aluno</b></p>
                
                <div class="col-6">
                    <input class="form-control" name="nomealuno" type="text" placeholder="Nome" />
                </div>

                <div class="col-6">
                    <input class="form-control" name="whatsapp" type="text" placeholder="Whatsapp" />
                </div>

                <input class="btn btn-primary col-6" type="submit" value="Mostrar Resultado" />
                <input class="btn btn-success col-6" type="submit" value="Enviar pelo Whatsapp" />
            </form>
    
            <div id="faixa-resultado"  style="text-align:center;">
                <?php
                    


                ?>
            </div>
            
        </div>
    
    </div>
</div>
</body>
</html>
