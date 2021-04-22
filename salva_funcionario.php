<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['btnEditar'])) {
    
    $erro = 0;

    if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome_f']) && !empty($_REQUEST['nome_f'])) {
        $nome = $_REQUEST['nome_f'];
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

    if (isset($_REQUEST['data_nascimento']) && !empty($_REQUEST['data_nascimento'])) {
        $data_nascimento = $_REQUEST['data_nascimento'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE funcionario SET nome_f = '$nome', cpf = '$cpf', cep = '$cep', n_casa = '$n_casa', data_nascimento = '$data_nascimento' WHERE id = $id";
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