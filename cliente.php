<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM cliente");

$cliente = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1 - Completo</title>
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
    <h1>Lista de Clientes</h1>
    <a href="cadastro_cliente.php">Cadastrar Cliente</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cep</th>
                <th>Numero da Casa</th>
                <th>Telefone</th>
                <th>Data de nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cliente as $cliente) { ?>
                <tr>
                    <td><?php echo $cliente["id"]; ?></td>
                    <td><?php echo $cliente["nome"]; ?></td>
                    <td><?php echo $cliente["cpf"]; ?></td>
                    <td><?php echo $cliente["cep"]; ?></td>
                    <td><?php echo $cliente["n_casa"]; ?></td>
                    <td><?php echo $cliente["telefone"]; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($cliente["data_nascimento"])); ?></td>
                    <td>
                        <?php echo "<a href='edita_cliente.php?id={$cliente['id']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_cliente.php?id={$cliente['id']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>