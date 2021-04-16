<?php

/*include "valida_login.php";*/
include 'conexao.php';

if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['modelo']) && !empty($_REQUEST['modelo'])) {
        $modelo = $_REQUEST['modelo'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['marca']) && !empty($_REQUEST['marca'])) {
        $marca = $_REQUEST['marca'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['ano']) && !empty($_REQUEST['ano'])) {
        $ano = $_REQUEST['ano'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['km']) && !empty($_REQUEST['km'])) {
        $km = $_REQUEST['km'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['final_placa']) && !empty($_REQUEST['final_placa'])) {
        $final_placa = $_REQUEST['final_placa'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['cor']) && !empty($_REQUEST['cor'])) {
        $cor = $_REQUEST['cor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['valor']) && !empty($_REQUEST['valor'])) {
        $valor = $_REQUEST['valor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['tipo']) && !empty($_REQUEST['tipo'])) {
        $tipo = $_REQUEST['tipo'];
    } else {
        $erro = 1;
    }
    
    if (!$erro) {
        $sql = "INSERT INTO veiculo (modelo, marca, ano, km, final_placa, cor, valor, tipo) VALUES ('$modelo','$marca','$ano', '$km', '$final_placa', '$cor', '$valor', '$tipo')";
        
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header("Location: http://localhost/prova/veiculo.php");
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
    <title>Cadastro de Veiculo</title>
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
    <h1>Cadastro de Veiculo</h1>
    <form action="cadastro_veiculo.php" method="post">
        <div class="form-input">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" required>
        </div>

        <div class="form-input">
            <label for="marca">Marca</label>
            <input type="marca" id="marca" name="marca" required>
        </div>

        <div class="form-input">
            <label for="ano">Ano</label>
            <input type="text" id="ano" name="ano" required>
        </div>

        <div class="form-input">
            <label for="km">Quilometros</label>
            <input type="text" id="km" name="km" required>
        </div>

        <div class="form-input">
            <label for="final_placa">Final da placa</label>
            <input type="text" id="final_placa" name="final_placa" required>
        </div>

        <div class="form-input">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" required>
        </div>

        <div class="form-input">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" required>
        </div>

        <div class="form-input">
            <label for="tipo">tipo</label>
            <input type="text" id="tipo" name="tipo" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
        </div>
    </form>
</body>
</html>