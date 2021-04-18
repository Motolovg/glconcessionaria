<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnVender'])) {
    
    $erro = 0;

    if (isset($_REQUEST['data']) && !empty($_REQUEST['data'])) {
        $data = $_REQUEST['data'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['modelo']) && !empty($_REQUEST['modelo'])) {
        $modelo = $_REQUEST['modelo'];
    } else {
        $erro = 1;
    }


    if (!$erro) {
        
        $sql = "UPDATE venda SET nome = '$nome', cpf = '$cpf', cep = '$cep', n_casa = '$n_casa', data_nascimento = '$data_nascimento' WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: funcionario.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>