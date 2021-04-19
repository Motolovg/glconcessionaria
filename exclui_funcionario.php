<?php

#include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM funcionario WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Funcionario {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir funcionario {$id}');</script>";
    }

}

echo "<script>window.location.replace('funcionario.php');</script>";

?>