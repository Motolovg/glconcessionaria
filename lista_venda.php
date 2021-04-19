<?php

#include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM historico");

$vendas = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-5.css">
    <title>Lista de Vendas</title>
    <style>
        h1, h4{
            font-family: 'bebas neue';
            padding: 10px 15px;
            width: 100%;
            left: 50%;
            top: 50%;
            text-align: center;
            color: #363636;



        }
        *{
            margin:0;
            padding: 0;
            outline: 0;
        }
        table{
            position: absolute;
            z-index: 2;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            width: 60%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 2px 15px rgba(64,64,64,.7);
            border-radius: 12px 12px 0 0;
            overflow: hidden;

        }
        td , th{
            padding: 15px 20px;
            text-align: center;


        }
        th{
            background-color: #4F4F4F;
            color: #fafafa;
            font-family: 'Open Sans',Sans-serif;
            font-weight: 200;
            text-transform: uppercase;

        }
        tr{
            width: 100%;
            background-color: #fafafa;
            font-family: 'Montserrat', sans-serif;
        }
        tr:nth-child(even){
            background-color: #eeeeee;
        }
        body{
            background:#DCDCDC;
        }
        a{
            color: #7B68EE;
        }
    </style>
</head>
<body>
<h1>Lista de Vendas</h1>
<a href="index.php" class="btn">Home</a>
<table>
    <tr>
        <th>#</th>
        <th>Data da Venda</th>
        <th>Nome do Cliente</th>
        <th>Modelo do Veiculo</th>
        <th>Valor Total</th>
        <th>Nome do Funcionario</th>
        <th><a href="venda.php">Nova Venda</th>
    </tr>
    <tbody>
    <?php foreach ($vendas as $venda) { ?>
        <tr>
            <td><?php echo $venda["id"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($vendas["data"])); ?></td>
            <td><?php echo $venda["nome_cliente"]; ?></td>
            <td><?php echo $venda["modelo_veiculo"]; ?></td>
            <td><?php echo $venda["valor"]; ?></td>
            <td><?php echo $venda["nome_funcionario"]; ?></td>
            <td>
                <?php echo "<a href='exclui_venda.php?id={$venda['id']}'>Excluir</a>"; ?>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>