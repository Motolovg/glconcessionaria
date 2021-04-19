<?php

#include "valida_login.php";
include 'conexao.php';
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
    <h1>Fazer Venda </h1>
    <form method="POST" action="salva_venda.php" >



                <select name="Nome do cliente">
                    <option> Cliente</option>
                        <?php
                            $result_cliente="SELECT nome FROM lg.cliente  ORDER BY nome ASC;";
                            $resultado_cliente= mysqli_query($connection, $result_cliente);
                            while ($row_cliente = mysqli_fetch_assoc($resultado_cliente)) { ?>
                                <option values="<?php echo $row_cliente['id'];?>"><?php echo $row_cliente['nome'];?>
                                        </option> <?php }
                        ?>

                </select> <br><br>

                <select name="Modelo do Veiculo">
                    <option> Veiculo </option>
                    <?php
                        $result_veiculo="SELECT modelo FROM lg.veiculo ORDER BY modelo ASC";
                        $resultado_veiculo = mysqli_query($connection , $result_veiculo);
                    while ($row_veiculo = mysqli_fetch_assoc($resultado_veiculo)) { ?>
                        <option values="<?php echo $row_veiculo['id'];?>"><?php echo $row_veiculo['modelo'];?>
                        </option> <?php }
                    ?>

                </select>

                <div class="form-input">
                    <label for="text">Valor da Compra</label>
                    <input type="text" id="text" name="valor" placeholder="Valor" required>
                </div>

                <select name="Nome do Funcionario">
                    <option> Funcionario </option>
                    <?php
                        $result_funcionario="SELECT nome FROM lg.funcionario ORDER BY nome ASC ";
                        $resultado_funcionario= mysqli_query($connection, $result_funcionario);
                    while ($row_funcionario= mysqli_fetch_assoc($resultado_funcionario)) { ?>
                        <option values="<?php echo $row_funcionario['id'];?>"><?php echo $row_funcionario['nome'];?>
                        </option> <?php }
                    ?>

                    <br><br>
                <div class="form-input">
                    <input type="submit" value="Vender" id="btnVender" name="btnVender">
                </div>

                
    </form>
</body>
</body>
</html>