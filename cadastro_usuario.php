<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['login']) && !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['senha']) && !empty($_REQUEST['senha'])) {
        $senha = $_REQUEST['senha'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $erro = 1;
    }    
    
    if (!$erro) {
        $sql = "INSERT INTO usuario (login, senha, nome, email) VALUES ('$login', '$senha', '$nome','$email')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/prova/usuario.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>

<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-5.css">
    <title>Cadastro de Uusuario</title>
    <style>
        .form-input {
            margin: 10px;
        }

        .form-input input {
            padding: 15px 80px;
            border-radius: 6px;
            border: 2px solid #8f8f8f;
            background-color: #DCDCDC;
            
        }

        .form-input input:focus {
            outline: none !important;
            border: 2px solid #3064ff;
        }

        .form-input label {
            display: block;
            position: relative;

        }

        .form-input input[type=submit] {
            padding: 10px 270px 10px 25px;
            color: #DCDCDC;
            background-color: #363636;
            cursor: pointer;
            transition-duration: 0.5s;
            text-align: center;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 270px 10px 25px;
            background-color: #836FFF;
            transition-duration: 0.5s;

        }
        form{
            position: absolute;
            padding: 10px 150px 250px 500px;
            font-family: 'bebas neue';
            color: #363636;


        }
        h1, h4{
        font-family: 'bebas neue';
        padding: 20px 16px;
        width: 100%; 
        left: 50%;
        top: 50%;
        text-align: center;
        color: #363636;
        }
        body{
            background:#DCDCDC;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Usuario</h1>
    <a href="usuario.php" class="btn">Voltar</a>
    <form action="cadastro_usuario.php" method="post">
        <div class="form-input">
            <label for="login">Login</label>
            <input type="login" id="login" name="login" required>
        </div>

        <div class="form-input">
            <label for="senha">Senha</label>
            <input type="senha" id="senha" name="senha" required>
        </div>

        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>