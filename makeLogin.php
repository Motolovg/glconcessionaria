<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();

if (isset($_REQUEST['btnLogin'])){
    $erro=0;

    if (isset($_REQUEST['usuario']) && !empty($_REQUEST['usuario'])){
        $usuario= $_REQUEST['usuario'];
    }

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])){
        $nome= $_REQUEST['nome'];
    }
    
    if (isset($_REQUEST['senha']) && !empty($_REQUEST['senha'])){
        $senha= $_REQUEST['senha'];
    }
    
    if (!$erro ){

        $sql="INSERT INTO LG.usuario(usuario ,nome, senha)VALUES('$usuario','$nome', '$senha');";
        
        $pdo->exec($sql);
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


                        <h1>Login</h1>
                    <form action="makeLogin.php" method="POST">

                        <label for ="login">Usuario:</label>
                        <input type="Nome do Usuario" name="login" id ="login" required>

                        <label for ="login">Nome:</label>
                        <input type="Nome do Usuario" name="login" id ="login" required>

                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" required>
                        
                        <input type="submit" name="btnlogin" id="btnlogin" value="Entrar">

                    </form>
    
</body>
</html>