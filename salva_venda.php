<?php
include 'conexao.php';

        $data=date;
        $nome_cliente=$_POST['nome'];
        $modelo_meiculo=$_POST['modelo'];
        $valor=$_POST['valor'];
        $nome_funcionario=$_POST['nome'];

        $result="INSERT INTO historico (data, nome_cliente, modelo_veiculo, valor, nome_funcionario)VALUES($data,$nome_cliente,$modelo_meiculo, $valor, $nome_funcionario);";

        $result=mysqli_query($connection,$result);

        if(mysqli_affected_rows($connection) !=0) {
            echo "Venda Concluida";
            header("Location: veiculo.php");
        }else{
            echo "Erro ao concluir a Venda";
        }
?>