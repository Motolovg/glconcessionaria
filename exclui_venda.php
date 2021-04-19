<?php

#include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM historico WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Venda {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir Venda {$id}');</script>";
    }

}

echo "<script>window.location.replace('lista_venda.php');</script>";

?>