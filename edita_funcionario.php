<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM funcionario WHERE id = {$id}";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionario</title>
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
            color: black;
            background-color: #62d158;
            cursor: pointer;
            transition-duration: 0.5s;
            text-align: center;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 270px 10px 25px;
            background-color: #9bc997;
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
    <h1>Editar Funcionario <?php echo $funcionario['nome']; ?></h1>
    <form action="salva_funcionario.php?id=<?php echo $id; ?>" method="post">

        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $funcionario['nome'] ?>" required>
        </div>

        <div class="form-input">
            <label for="cpf">Cpf</label>
            <input type="cpf" id="cpf" name="cpf" value="<?php echo $funcionario['cpf'] ?>" required>
        </div>

        <div class="form-input">
            <label for="cep">Cep</label>
            <input type="text" id="cep" name="cep" value="<?php echo $funcionario['cep'] ?>" required>
        </div>

        <div class="form-input">
            <label for="n_casa">Numero da Casa</label>
            <input type="text" id="n_casa" name="n_casa" value="<?php echo $funcionario['n_casa'] ?>" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $funcionario['data_nascimento'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>