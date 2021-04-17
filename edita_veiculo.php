<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM veiculo WHERE id = {$id}";
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar veiculo</title>
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
    <h1>Editar Veiculo <?php echo $veiculo['modelo']; ?></h1>
    <form action="salva_veiculo.php?id=<?php echo $id; ?>" method="post">

        <div class="form-input">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="<?php echo $veiculo['modelo'] ?>" required>
        </div>

        <div class="form-input">
            <label for="marca">Marca</label>
            <input type="marca" id="marca" name="marca" value="<?php echo $veiculo['marca'] ?>" required>
        </div>

        <div class="form-input">
            <label for="ano">Ano</label>
            <input type="text" id="ano" name="ano" value="<?php echo $veiculo['ano'] ?>" required>
        </div>

        <div class="form-input">
            <label for="km">Quilometragem</label>
            <input type="text" id="km" name="km" value="<?php echo $veiculo['km'] ?>" required>
        </div>

        <div class="form-input">
            <label for="final_placa">Placa</label>
            <input type="text" id="final_placa" name="final_placa" value="<?php echo $veiculo['final_placa'] ?>" required>
        </div>

        <div class="form-input">
            <label for="cor">Cor</label>
            <input type="text" id="cor" name="cor" value="<?php echo $veiculo['cor'] ?>" required>
        </div>

        <div class="form-input">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" value="<?php echo $veiculo['valor'] ?>" required>
        </div>

        <div class="form-input">
            <label for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" value="<?php echo $veiculo['tipo'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>