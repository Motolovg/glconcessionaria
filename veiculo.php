<?php

/*include "valida_login.php";*/
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM veiculo");

$veiculo = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiculos</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding:8px;
        }
    </style>
</head>
<body>
    <h1>Lista de Veiculos</h1>
    <a href="cadastro_veiculo.php">Cadastrar Veiculos</a>
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