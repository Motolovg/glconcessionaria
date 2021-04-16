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
    
    if (isset($_REQUEST['cpf']) && !empty($_REQUEST['cpf'])) {
        $cpf = $_REQUEST['cpf'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['cep']) && !empty($_REQUEST['cep'])) {
        $cep = $_REQUEST['cep'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['n_casa']) && !empty($_REQUEST['n_casa'])) {
        $n_casa = $_REQUEST['n_casa'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['telefone']) && !empty($_REQUEST['telefone'])) {
        $telefone = $_REQUEST['telefone'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_nascimento']) && !empty($_REQUEST['data_nascimento'])) {
        $data_nascimento = $_REQUEST['data_nascimento'];
    } else {
        $erro = 1;
    }
    
    if (!$erro) {
        $sql = "INSERT INTO cliente (nome, cpf, cep, n_casa, telefone, data_nascimento) VALUES ('$nome','$cpf','$cep', '$n_casa', $telefone, '$data_nascimento')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/prova/cliente.php");
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
    <title>Cadastro de cliente</title>
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
    <h1>Cadastro de cliente</h1>
    <form action="cadastro_cliente.php" method="post">
        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-input">
            <label for="cpf">cpf</label>
            <input type="cpf" id="cpf" name="cpf" required>
        </div>

        <div class="form-input">
            <label for="cep">cep</label>
            <input type="text" id="cep" name="cep" required>
        </div>

        <div class="form-input">
            <label for="n_casa">Numero da Casa</label>
            <input type="text" id="n_casa" name="n_casa" required>
        </div>

        <div class="form-input">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" required>
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