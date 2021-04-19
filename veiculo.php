<?php

#include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM veiculo");

$veiculo = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-5.css">
    <title>Veiculos</title>
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
    <h1>Lista de Veiculos</h1>
    <a href="index.php" class="btn">Home</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Quilometros</th>
                <th>Placa</th>
                <th>Cor</th>
                <th>Valor</th>
                <th>Tipo</th>
                <th>Quantidade</th>
                <th><a href="cadastro_veiculo.php">Cadastrar Veiculo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($veiculo as $veiculo) { ?>
                <tr>
                    <td><?php echo $veiculo["id"]; ?></td>
                    <td><?php echo $veiculo["modelo"]; ?></td>
                    <td><?php echo $veiculo["marca"]; ?></td>
                    <td><?php echo $veiculo["ano"]; ?></td>
                    <td><?php echo $veiculo["km"]; ?></td>
                    <td><?php echo $veiculo["final_placa"]; ?></td>
                    <td><?php echo $veiculo["cor"]; ?></td>
                    <td><?php echo $veiculo["valor"]; ?></td>
                    <td><?php echo $veiculo["tipo"]; ?></td>
                    <td><?php echo $veiculo["quantidade"]; ?></td>

                    <td>
                        <?php echo "<a href='edita_veiculo.php?id={$veiculo['id']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_veiculo.php?id={$veiculo['id']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>