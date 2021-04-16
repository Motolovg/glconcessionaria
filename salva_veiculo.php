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

    if (isset($_REQUEST['modelo']) && !empty($_REQUEST['modelo'])) {
        $modelo = $_REQUEST['modelo'];
    } else {
        $erro = 1;
    }
    
    if (isset($_REQUEST['marca']) && !empty($_REQUEST['marca'])) {
        $marca = $_REQUEST['marca'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['ano']) && !empty($_REQUEST['ano'])) {
        $ano = $_REQUEST['ano'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['km']) && !empty($_REQUEST['km'])) {
        $km = $_REQUEST['km'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['final_placa']) && !empty($_REQUEST['final_placa'])) {
        $final_placa = $_REQUEST['final_placa'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['cor']) && !empty($_REQUEST['cor'])) {
        $cor = $_REQUEST['cor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['valor']) && !empty($_REQUEST['valor'])) {
        $valor = $_REQUEST['valor'];
    } else {
        $erro = 1;
    }

    if (isset($_REQUEST['tipo']) && !empty($_REQUEST['tipo'])) {
        $tipo = $_REQUEST['tipo'];
    } else {
        $erro = 1;
    }

    if (!$erro) {
        
        $sql = "UPDATE veiculo SET modelo = '$modelo', marca = '$marca', ano = '$ano', km = '$km', final_placa = '$final_placa', cor = '$cor', valor = '$valor', tipo = '$tipo'  WHERE id = $id";
        $res = mysqli_query($connection, $sql);

        if ($res) {
            header("Location: veiculo.php");
        } else {
            echo "Erro ao atualizar o banco de dados";
        }

    } else {
        echo "Erro nos dados. Falta algum valor";
    }

}

?>