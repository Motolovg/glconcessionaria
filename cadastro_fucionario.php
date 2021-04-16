<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

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

    if (isset($_REQUEST['celular']) && !empty($_REQUEST['celular'])) {
        $celular = $_REQUEST['celular'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_nascimento']) && !empty($_REQUEST['data_nascimento'])) {
        $data_nascimento = $_REQUEST['data_nascimento'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        $sql = "INSERT INTO aluno (nome, email, celular, data_nascimento) VALUES ('$nome','$email','$celular','$data_nascimento')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost:8080/projeto1/alunos.php");
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
    <title>Cadastro de Aluno</title>
    <style>
        .form-input {
            margin: 15px;
        }

        .form-input input {
            padding: 5px;
            border-radius: 4px;
            border: 2px solid #8f8f8f;
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
            padding: 10px 25px 10px 25px;
            color: black;
            background-color: #62d158;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 25px 10px 25px;
            background-color: #9bc997;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Aluno</h1>
    <form action="cadastro_aluno.php" method="post">
        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-input">
            <label for="celular">Celular</label>
            <input type="text" id="celular" name="celular" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>