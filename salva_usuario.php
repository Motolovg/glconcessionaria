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

    if (isset($_REQUEST['login']) && !empty($_REQUEST['login'])) {
        $login = $_REQUEST['login'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['senha']) && !empty($_REQUEST['senha'])) {
        $senha = $_REQUEST['senha'];
    } else {
        $erro = 1;
    } 

    if (isset($_REQUEST['nome']) && !empty($_REQUEST['nome'])) {
        $nome = $_REQUEST['nome'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE usuario SET login ='$login', senha = '$senha', nome = '$nome', email = '$email' WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: usuario.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>