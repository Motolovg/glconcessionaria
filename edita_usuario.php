<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id']) and !empty($_REQUEST['id'])) {

    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM usuario WHERE id = {$id}";
    $res = mysqli_query($connection, $sql);

    if ($res && $res->num_rows == 1) {
        $usuario = $res->fetch_assoc();
    } else {
        echo "<p>usuario não encontrado, volte a lista</p>";
        echo "<a href='usuario.php'>Listagem de usuarios</a>";
    }

} else {
    header("Location: usuario.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
    <h1>Editar Usuario <?php echo $usuario['nome']; ?></h1>
    <form action="salva_usuario.php?id=<?php echo $id; ?>" method="post">

        <div class="form-input">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" value="<?php echo $usuario['login'] ?>" required>
        </div>

        <div class="form-input">
            <label for="senha">Senha</label>
            <input type="text" id="senha" name="senha" value="<?php echo $usuario['senha'] ?>" required>
        </div>

        <div class="form-input">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome'] ?>" required>
        </div>

        <div class="form-input">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario['email'] ?>" required>
        </div>

        <div class="form-input">
            <input type="submit" value="Editar" id="btnEditar" name="btnEditar">
        </div>
    </form>
</body>
</body>
</html>