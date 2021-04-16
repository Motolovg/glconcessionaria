<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();


if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['modelo']) && !empty($_REQUEST['modelo'])) {
        $modelo = $_REQUEST['modelo'];
    } else {
        $erro = 1;
    }
    
    if (!$erro) {
        $sqlInsert = "INSERT INTO lg.modelo() VALUES ('$modelo')";
        
        $pdo->exec($sqlInsert);
        
        if($result){
            header("location: http://localhost:80/prova/CarRegistration.php");
        } else {
            echo "Erro ao executar o SQL";
        }
    } else {
        echo "Erro nos dados. Falta algum valor";
    }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Modelo</title>
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
    <h1>Cadastro de Modelo</h1>
    <form action="cadastro_professor.php" method="post">
        <div class="form-input">
            <label for="Marca">Modelo</label>
            <input type="text" id="Marca" name="Marca" required>
        </div>
    </form>
</body>
<br>
<a href="BrandRegistration.php">Cancelar e Voltar a marca</a>
</html>