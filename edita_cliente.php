<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM cliente WHERE id = {$id}";
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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
    <h1>Editar cliente <?php echo $cliente['nome']; ?></h1>
    <form action="salva_cliente.php?id=<?php echo $id; ?>" method="post">

        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $cliente['nome'] ?>" required>
        </div>

        <div class="form-input">
            <label for="cpf">Cpf</label>
            <input type="cpf" id="cpf" name="cpf" value="<?php echo $cliente['cpf'] ?>" required>
        </div>

        <div class="form-input">
            <label for="cep">Cep</label>
            <input type="text" id="cep" name="cep" value="<?php echo $cliente['cep'] ?>" required>
        </div>

        <div class="form-input">
            <label for="n_casa">Numero da Casa</label>
            <input type="text" id="n_casa" name="n_casa" value="<?php echo $cliente['n_casa'] ?>" required>
        </div>

        <div class="form-input">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" value="<?php echo $cliente['telefone'] ?>" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $cliente['data_nascimento'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>