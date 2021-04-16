<?php

/*include "valida_login.php";*/
include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['cpf']) && !empty($_REQUEST['cpf'])) {
        $cpf = $_REQUEST['cpf'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['cep']) && !empty($_REQUEST['cep'])) {
        $cep = $_REQUEST['cep'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['n_casa']) && !empty($_REQUEST['n_casa'])) {
        $n_casa = $_REQUEST['n_casa'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['telefone']) && !empty($_REQUEST['telefone'])) {
        $telefone = $_REQUEST['telefone'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['data_nascimento']) && !empty($_REQUEST['data_nascimento'])) {
        $data_nascimento = $_REQUEST['data_nascimento'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE cliente SET nome = '$nome', cpf = '$cpf', cep = '$cep', n_casa = '$n_casa', telefone = '$telefone', data_nascimento = '$data_nascimento' WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: cliente.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>