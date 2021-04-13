<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();

$statement= $pdo->query('SELECT * FROM LG.proprietario;');

$owners=$statement->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proprietarios</title>
</head>
<body>

                <h1>Lista de Proprietarios</h1>
                <a href="#">#</a>
                <table>
                    <thead>
                        <tr>
                            <th>Codigo do Proprietatio</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Telefone</th>                    
                        </tr>            
                    </thead>
                    <tbody>
                        <?php foreach($owners as $owner) {?>
                            <tr>
                                <td><?php echo $owner['id'];?></td>
                                <td><?php echo $owner['nome'];?></td>
                                <td><?php echo $owner['cpf'];?></td>
                                <td><?php echo $owner['endereco'];?></td>
                                <td><?php echo $owner['bairro'];?></td>
                                <td><?php echo $owner['telefone'];?></td>                            
                            </tr>
                        <?php } ?>
                    </tbody>
                                
                </table>

    
</body>
</html>


