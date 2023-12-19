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
<?php include("head.php"); ?>
<title>Autenticação de usuário PHP para uma área restrita</title>
<meta name="keywords" content="Calculo de piso, piso por metro quadrado, online, calculadora de m2, metro quadrado">
</head>
<body>

<div id="conteudo"class="container row align-items-center">
    
    <div class="col">
        <h1>Autenticação de usuário PHP</h1>
        <p>Olá, estou disponibilizando este sistema online com o objetivo de mostrar o funcionamento de uma área restrata apenas a usuarios com login e senha, em caso de sugestões por favor envie para <a href="mailto:programador@vitorcarvalho.dev.br">programador@vitorcarvalho.dev.br</a><br/></p>
        <p><a href="index.php">Voltar</a> | <a href="autenticacaousers.php">Refazer</a></p>
    </div>
    
    <!-- 
    
    ## L:uvitor
    ## S:svitor

    -->
   
    <div class="col">
        <div id="faixa-exercicio">
            <p>Login e senha para acesso</p>
            <form id="form-vitor" class="form-padrao loja" method="post" >
                <input class="form-control" name="uadm" type="text" placeholder="Usuário" />
                <input class="form-control" name="sadm" type="password" placeholder="Senha" />
                <input class="btn btn-primary" type="submit" value="Entrar" />
            </form>
        </div>    
    </div>
    
</body>
</html>
