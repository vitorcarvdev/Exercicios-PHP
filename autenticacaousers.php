<?php
ob_start();
include('conexao.php');

    if(isset($_POST['uadm']) || isset($_POST['sadm'])) { // isset é para verificar se o o name do form existe
        
        if(strlen($_POST['uadm']) == 0){ // strlen verifica se o campo do formulario esta em branco
            echo " - <small><i>Preencha o usuário</i></small>";
        } elseif(strlen($_POST['sadm']) == 0){ // strlen verifica se o campo do formulario esta em branco
            echo " - <small><i>Preencha a senha</i></small>";
        }
        else{
            
            
            $loginNome = $mysqli->real_escape_string($_POST['uadm']); // real_escape_string faz a segurança para o campo nao ser rackeado
            $senha = $mysqli->real_escape_string($_POST['sadm']);

            $sql_code = "SELECT * FROM usuarios WHERE loginNome = '$loginNome' AND senha = '$senha'"; // comparando dados com BD
            $sql_query = $mysqli->query($sql_code) or die("Falha na autenticação com SQL" . $mysqli->error);

            $quantidade  = $sql_query->num_rows; // trazendo quantidade de dados encontrados

            if($quantidade == 1){// se achar 1 resultado identico faça o if abaixo
                
                $usuario = $sql_query->fetch_assoc();

                    if(!isset($_SESSION)){ // session_start mantem usuario ativo por um tempo
                        session_start();
                    }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $usuarioNome = $usuario['nome'];
                header("Location:arquivo.php");
            }
            else{
                echo "<script>alert('Errou a senha?')</script>";
            }
            
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<title>Autenticação de usuário PHP para uma área restrita</title>
<meta name="keywords" content="Calculo de piso, piso por metro quadrado, online, calculadora de m2, metro quadrado">
</head>

<body>
<div id="conteudo">
    <h1>Autenticação de usuário PHP para uma área restrita</h1>

    <p>Olá, estou disponibilizando este sistema online com o objetivo de mostrar o funcionamento de uma área restrata apenas a usuarios com login e senha, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
    
    <!-- 
    
    ## L:uvitor
    ## S:svitor

    -->
   
    
    <p><a href="https://www.php.net/manual/en/index.php" target="_blank">Manual do PHP</a> | <a href="index.php">Voltar para o Início</a> | <a href="autenticacaousers.php">Refazer</a></p>

        <div id="faixa-exercicio">
            <form id="form-vitor" class="form-padrao loja" method="post" style="text-align:center;">
                <input name="uadm" type="text" placeholder="Usuário" /><br/>
                <input name="sadm" type="password" placeholder="Senha" /><br/>
                <input type="submit" value="Entrar" /><br/>
            </form>

            <div id="faixa-resultado"  style="width:30% !important; text-align:center; color:#fff; margin:20px auto;">


        </div>
    </div>    
</div>
    

    

</body>
</html>
