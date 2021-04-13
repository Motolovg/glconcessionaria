<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();


if(isset($_REQUEST['btnSave'])){

    $erro=0;

        if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])){
            $nome=$_REQUEST['nome'];
        } return $erro =1;

        if (isset($_REQUEST['cpf']) && !empty($_REQUEST['cpf'])){
            $cpf=$_REQUEST['cpf'];
        } return $erro =1;

        if (isset($_REQUEST['endereco']) && !empty($_REQUEST['endereco'])){
            $endereco =$_REQUEST['endereco'];
        } return $erro =1;

        if (isset($_REQUEST['bairro']) && !empty($_REQUEST['bairro'])){
            $bairro =$_REQUEST['bairro'];
        } return $erro =1;

        if (isset($_REQUEST['telefone'])  && !empty($_REQUEST['telefone'])){
            $telefone =$_REQUEST['telefone'];
        } return $erro =1;   
}



if (!$erro){
    $sqlInsert="INSERT INTO LG.proprietario(nome, cpf, endereco, bairro, telefone)VALUES('$nome','$cpf','$endereco','$bairro','$telefone');";
        
    $pdo->exec($sqlInsert);

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadasdro de Proprietarios</title>
</head>
<body>
                <h1>Cadastro Proprietarios</h1>
                <form action="teste.php" method="post">

                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" required>

                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" required>

                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" required>

                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" required>

                    <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">

                
                </form>
</body>
</html>

    






