<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora</title>
<meta name="keywords" content="calculadora simples online, calculadora online, colculadora responsiva">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
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

<div id="conteudo">
    <h1>Calculadora Online</h1>

    <p>Olá, estou disponibilizando esta calculadora online para que você possa usar gratuitamente</br> em caso de melhorias por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/><br/> <a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="calculadora.php">Refazer</a></p>

    <div id="faixa-exercicio">
        <form id="form-caculadora" method="post" style="text-align:center;">
            <input name="PrimeiroNum" type="text" placeholder="Escolha um numero" />
            <select name="operacoes" id="operacoes">
            <option value="oper">Operador</option>
                <option value="soma">+</option>
                <option value="subtracao">-</option>
                <option value="multiplicacao">*</option>
                <option value="divisao">/</option>
            </select>
            <input name="SegundoNum" type="text" placeholder="Outro um numero" />
            <input type="submit" value="Mostrar Resultado" />
        </form>

        <div id="faixa-resultado"  style="text-align:center; color:#fff; margin:20px auto;">
            <?php echo "O resultado da " . $NumOperacoes . " é = " . $Resultado; ?>
        </div>
    </div>    
</div>
</body>
</html>
