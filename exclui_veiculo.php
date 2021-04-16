<?php

include "valida_login.php";
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM veiculo WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Veiculo {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir Veiculo {$id}');</script>";
    }

}

echo "<script>window.location.replace('veiculo.php');</script>";

?>