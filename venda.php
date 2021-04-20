<?php

#include "valida_login.php";
include 'conexao.php';

$sql_cliente="SELECT id, nome FROM cliente  ORDER BY nome ASC;";
$resultado_cliente= mysqli_query($connection, $sql_cliente);
$clientes = $resultado_cliente->fetch_all(MYSQLI_ASSOC);


$sql_veiculo="SELECT id, modelo FROM veiculo  ORDER BY modelo ASC;";
$resultado_veiculo= mysqli_query($connection, $sql_veiculo);
$veiculos = $resultado_veiculo->fetch_all(MYSQLI_ASSOC);

$sql_funcionario="SELECT id, nome FROM funcionario  ORDER BY nome ASC;";
$resultado_funcionario= mysqli_query($connection, $sql_funcionario);
$funcionarios = $resultado_funcionario->fetch_all(MYSQLI_ASSOC);

                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda</title>
    <style>
        .form-input {
            margin: 15px;
        }

        .form-input input {
            padding: 5px;
            border-radius: 4px;
            border: 2px solid #8f8f8f;
        }

        .form-input input:focus {
            outline: none !important;
            border: 2px solid #3064ff;
        }

        .form-input label {
            display: block;
            position: relative;

        }

        .form-input input[type=submit] {
            padding: 10px 25px 10px 25px;
            color: black;
            background-color: #62d158;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 25px 10px 25px;
            background-color: #9bc997;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Fazer Venda</h1>
    <form method="POST" action="salva_venda.php" >


            <label for="cliente">Cliente</label>
                <select name="cliente">
                    <?php foreach($clientes as $cliente) {?>
                        <option values= "<?php echo $cliente['id']?>"><?php echo $cliente["id"], $cliente['nome'];?></option>
                    <?php } ?>
                </select> 
             <br><br>

             <label for="veiculo">veiculo</label>
                <select name="veiculo">
                    <?php foreach($veiculos as $veiculo) {?>
                        <option values= "<?php echo $veiculo['id']?>"><?php echo $veiculo["id"], $veiculo['modelo'];?></option>
                    <?php } ?>
                </select> 
             <br><br>

             <label for="funcionario">funcionario</label>
                <select name="funcionario">
                    <?php foreach($funcionarios as $funcionario) {?>
                        <option values= "<?php echo $funcionario['id']?>"><?php echo $funcionario["id"], $funcionario['nome'];?></option>
                    <?php } ?>
                </select> 
             <br><br>

                <div class="form-input">
                    <input type="submit" value="Vender" id="btnVender" name="btnVender">
                </div>

                
    </form>
</body>
</body>
</html>