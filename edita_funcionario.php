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
        echo "<a href='funcionario.php'>Listagem de alunos</a>";
    }

} else {
    header("Location: alunos.php");
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
    <h1>Editar Funcionario <?php echo $funcionario['nome']; ?></h1>
    <form action="salva_fucionario.php?id=<?php echo $id; ?>" method="post">

        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $funcionario['nome'] ?>" required>
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $aluno['email'] ?>" required>
        </div>

        <div class="form-input">
            <label for="celular">Celular</label>
            <input type="text" id="celular" name="celular" value="<?php echo $aluno['celular'] ?>" required>
        </div>

        <div class="form-input">
            <label for="data_nascimento">Data de Nascimento</label>
            <input type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $aluno['data_nascimento'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>