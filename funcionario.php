<?php

include "valida_login.php";
include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM funcionarios");

$funcionarioss = $result->fetch_all(MYSQLI_ASSOC);

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
    <h1>Lista de Funcionários</h1>
    <a href="cadastro_fucionario.php">Cadastrar Funcionario</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Data Nascimento</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $fucionario) { ?>
                <tr>
                    <td><?php echo $funcionario["id"]; ?></td>
                    <td><?php echo $funcionario["nome"]; ?></td>
                    <td><?php echo $fucionario["cpf"]; ?></td>
                    <td><?php echo $funcionario["cep"]; ?></td>
                    <td><?php echo $fucionario["n_cep"]; ?></td>
                    <td><?php echo $funcionario["data_nascimento"]; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($funcionario["data_nascimento"])); ?></td>
                    <td>
                        <?php echo "<a href='edita_aluno.php?id={$funcionario['id']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_aluno.php?id={$funcionario['id']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>