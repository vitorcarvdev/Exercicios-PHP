<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Calculadora</title>
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
    <h1>Minha ordem de estudos</h1>

    <p>Estudo tudo sobre os assuntos abaixo, até executar a tarefa e as varições dentro dela<br/> este é o <a href="https://www.php.net/manual/en/index.php" target="_blank">manual do PHP</a> | <a href="index.php">Voltar</a></p>

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
            <?php echo "O resultado da " . $teste . " é = " . $Resultado; ?>
        </div>

        

    </div>
        
</div>

</body>
</html>
