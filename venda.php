<?php

include "valida_login.php";
include 'conexao.php';

$sql_cliente="SELECT id, nome FROM cliente  ORDER BY nome ASC;";
$resultado_cliente= mysqli_query($connection, $sql_cliente);
$clientes = $resultado_cliente->fetch_all(MYSQLI_ASSOC);


$sql_veiculo="SELECT id, modelo FROM veiculo  ORDER BY modelo ASC;";
$resultado_veiculo= mysqli_query($connection, $sql_veiculo);
$veiculos = $resultado_veiculo->fetch_all(MYSQLI_ASSOC);

$sql_funcionario="SELECT id, nome_f FROM funcionario  ORDER BY nome_f ASC;";
$resultado_funcionario= mysqli_query($connection, $sql_funcionario);
$funcionarios = $resultado_funcionario->fetch_all(MYSQLI_ASSOC);

                        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-5.css">
    <title>Venda</title>
    <style>
        .form-input {
            margin: 15px;
        }
        h1, h4{
        font-family: 'bebas neue';
        padding: 20px 16px;
        width: 100%; 
        left: 50%;
        top: 50%;
        text-align: center;
        color: #363636;
        }
        body{
            background:#DCDCDC;
        }
        label{
        font-family: 'bebas neue';
        font-size: 20px;    
        padding: 20px 16px;
        width: 100%; 
        left: 50%;
        top: 50%;
        text-align: center;
        color: #363636;
        }
        select {
            padding: 10px 90px 20px 80px;
            border-radius: 6px;
            border: 2px solid #8f8f8f;
            margin: 5px;
            font-size: 18px;
            font-family: 'bebas neue';
            background-color: #DCDCDC;
            
        }
        div{
            width: 250px; 
            margin-left: auto;
            margin-right: auto;
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
            padding: 10px 200px 10px 25px;
            color: #DCDCDC;
            background-color: #363636;
            cursor: pointer;
            transition-duration: 0.5s;
        }

        .form-input input[type=submit]:hover {
            padding: 10px 200px 10px 25px;
            background-color: #836FFF;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Fazer Venda</h1>
    <a href="index.php" class="btn">Home</a>
    <form method="POST" action="salva_venda.php" >

        <div>
            <label for="cliente">Cliente </label>
                <select name="cliente">
                    <?php foreach($clientes as $cliente) {?>
                        <option values= "<?php echo $cliente['id']?>"><?php echo $cliente["id"], $cliente['nome'];?></option> 
                    <?php } ?>
                </select>
             <br><br>
        </div>
        <div>                
             <label for="veiculo">veiculo</label>
                <select name="veiculo">
                    <?php foreach($veiculos as $veiculo) {?>
                        <option values= "<?php echo $veiculo['id']?>"><?php echo $veiculo["id"], $veiculo['modelo'];?></option>
                    <?php } ?>
                </select> 
             <br><br>
        </div>
        <div>                
             <label for="funcionario">funcionario</label>
                <select name="funcionario">
                    <?php foreach($funcionarios as $funcionario) {?>
                        <option values= "<?php echo $funcionario['id']?>"><?php echo $funcionario["id"], $funcionario['nome_f'];?></option>
                    <?php } ?>
                </select> 
             <br><br>
        </div>
        <div>
                <div class="form-input">
                    <input type="submit" value="Vender" id="btnVender" name="btnVender">
                </div>
        </div>                
                
    </form>
</body>
</body>
</html>