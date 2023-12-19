<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php include("head.php"); ?>
<title>Calculadora</title>
<meta name="keywords" content="calculadora simples online, calculadora online, colculadora responsiva">
</head>
<body>

<?php
    $NumUm = $_POST['PrimeiroNum'] ?? null; // o ?? null tira o erro ao abrir e o campo estar vazio
    $NumDois = $_POST['SegundoNum'] ?? null;
    $NumOperacoes = $_POST['operacoes'] ?? null;
    $Resultado = 0;

    if ($NumOperacoes == 'soma') {
        $Resultado = $NumUm + $NumDois;
      } elseif($NumOperacoes == 'subtracao') {
        $Resultado = $NumUm - $NumDois;
      } elseif($NumOperacoes == 'multiplicacao') {
        $Resultado = $NumUm * $NumDois;
      } elseif($NumOperacoes == 'divisao') {
        $Resultado = $NumUm / $NumDois;
      } elseif ($NumOperacoes == 'oper'){
        $Resultado = "Escolha um operador";
      }
?>

<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
    <h1>Calculadora Online</h1>
    <p>Olá, estou disponibilizando esta calculadora online para que você possa usar gratuitamente em caso de melhorias por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/><br/><a href="index.php">Voltar</a> | <a href="calculadora.php">Refazer</a></p>
    </div>
    
    <div id="faixa-exercicio" class="col">
        
        <form method="post" style="margin: 0 auto; text-align:center;">
            
            <label class="col-12">
                <input name="PrimeiroNum" class="form-control" type="text" placeholder="Escolha um numero" />
            </label>
            
            <label class="col-2">
                <select name="operacoes" class="form-control" id="operacoes" style="text-align:center;">
                    <option value="soma">+</option>
                    <option value="subtracao">-</option>
                    <option value="multiplicacao">*</option>
                    <option value="divisao">/</option>
                </select>
            </label>
            
            <label class="col-12" >
                <input name="SegundoNum" class="form-control" type="text" placeholder="Outro um numero" />
            </label>
            
            <label class="col-12" >
                <input type="submit" class="btn btn-primary" value="Mostrar Resultado" style="width:100%;"/>
            </label>
            
        </form>

        <div id="faixa-resultado">
            <?php echo "O resultado da " . $NumOperacoes . " é = " . $Resultado; ?>
        </div>
    </div>    
</div>
</body>
</html>
