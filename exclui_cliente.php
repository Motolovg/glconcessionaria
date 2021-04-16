<?php

/*include "valida_login.php";*/
include 'conexao.php';

if (isset($_REQUEST['id'])) {
    
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM cliente WHERE id = $id";
    $res = mysqli_query($connection, $sql);

    if ($res) {
        echo "<script>alert('Cliente {$id} excluido com sucesso');</script>";
    } else {
        echo "<script>alert('Falha ao excluir Cliente {$id}');</script>";
    }

}

echo "<script>window.location.replace('cliente.php');</script>";

?>