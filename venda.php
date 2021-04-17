<?php

#include "valida_login.php";
include 'conexao.php';

#----------------------------------------------CLIENTE------------------------------------------------------------------


if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM cliente";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $cliente = $res->fetch_assoc();
    } else {
        echo "<p>Cliente não encontrado, volte a lista</p>";
        echo "<a href='Cliente.php'>Listagem de clientes</a>";
    }

} else {
    header("Location: cliente.php");
}


#----------------------------------------------VEICULO--------------------------------------------------------------------


if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM veiculo";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $veiculo = $res->fetch_assoc();
    } else {
        echo "<p>Veiculo não encontrado, volte a lista</p>";
        echo "<a href='veiculo.php'>Listagem de Veiculos</a>";
    }

} else {
    header("Location: veiculo.php");
}

#---------------------------------------FUNCIONARIO----------------------------------------------------------


if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM funcionario";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $funcionario = $res->fetch_assoc();
    } else {
        echo "<p>Funcionario não encontrado, volte a lista</p>";
        echo "<a href='funcionario.php'>Listagem de funcionarios</a>";
    }

} else {
    header("Location: funcionario.php");
}



?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
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
    <h1>Fazer Venda </h1>
    <form action="salva_venda.php?id=<?php echo $id; ?>" method="post">

                <div class="form-input">
                    <label for="data">Data da Compra</label>
                    <input type="date" id="data" name="data" value="<?php echo $venda['data'] ?>" required>
                </div>

            <?php foreach ($cliente as $cliente) { ?>    
                <div class="form-input">
                    <label for="nome">Nome do Cliente</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $cliente['nome'] ?>" required>
                </div>
            <?php } ?>


            <?php foreach ($veiculo as $veiculo) { ?>
                <div class="form-input">
                    <label for="modelo">Modelo do Carro</label>
                    <input type="modelo" id="modelo" name="modelo" value="<?php echo $veiculo['cpf'] ?>" required>
                </div>
            <?php } ?>

            <?php foreach ($funcionario as $funcionario) { ?>
                <div class="form-input">
                    <label for="nome">Nome do Funcionario</label>
                    <input type="text" id="nome" name="nome" value="<?php echo $funcionario['cep'] ?>" required>
                </div>
            <?php } ?>


                <div class="form-input">
                    <input type="submit" value="Vender" id="btnVender" name="btnVender">
                </div>

                
    </form>
</body>
</body>
</html>