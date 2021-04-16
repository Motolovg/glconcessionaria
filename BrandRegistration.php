<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();


if (isset($_REQUEST['btnSalvar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['marca']) && !empty($_REQUEST['marca'])) {
        $marca = $_REQUEST['marca'];
    } else {
        $erro = 1;
    }
    
    if (!$erro) {
        $pdo = "INSERT INTO lg.marca
        VALUES ('$marca')";
        $res = mysqli_query($pdo, $sql);
        $linhas=mysqli_affected_rows($con);

    if ($linhas == 1){
        echo "Marca registrada com sucesso<br/>";
    }else{
        echo "Falha na gravação do registro<br/>";
    }
    mysqli_close($con);
}}


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de marca</title>
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
    <h1>Cadastro de Marca</h1>
    <form action="ModelRegistration.php" method="post">
        <div class="form-input">
            <label for="Marca">Marca</label>
            <input type="text" id="Marca" name="Marca" required>
        </div>
    </form>
</body>
<br>
<a href="Owners.php">Cancelar e Voltar</a>
</html>