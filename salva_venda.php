<?php
include 'conexao.php';

/*        $data= date("Y-m-d");
        $cliente_id=$_POST['cliente'];
        $veiculo_id=$_POST['veiculo'];
        $funcionario_id=$_POST['funcionario'];
        

        $result="INSERT INTO historico (data_venda, cliente_id, veiculo_id, funcionario_id)VALUES($data, $cliente_id, $veiculo_id, $funcionario_id);";

        $result=mysqli_query($connection,$result);

        if(mysqli_affected_rows($connection) !=0) {
            echo "Venda Concluida";
            header("Location: lista_venda.php");
        }else{
            echo "Erro ao concluir a Venda";
        }*/
        if (isset($_REQUEST['btnVender'])) {
    
            $erro = 0;
        
            if (isset($_POST['cliente']) && !empty($_POST['cliente'])) {
                $cliente_id = $_POST['cliente'];
            } else {
                $erro = 1;
            } 
        
            if (isset($_POST['veiculo']) && !empty($_POST['veiculo'])) {
                $veiculo_id = $_POST['veiculo'];
            } else {
                $erro = 1;
            }
            
            if (isset($_POST['funcionario']) && !empty($_POST['funcionario'])) {
                $funcionario_id = $_POST['funcionario'];
            } else {
                $erro = 1;
            }

            $data= date("Y-m-d");

            if (!$erro) {

                $sql = "INSERT INTO historico (data_venda, cliente, veiculo, funcionario)VALUES('$data', '$cliente_id', '$veiculo_id', '$funcionario_id')";
                $res = mysqli_query($connection, $sql);
        
                if ($res) {
                    header("Location: lista_venda.php");
                } else {
                    echo var_dump($data, $cliente_id, $veiculo_id, $funcionario_id);
                }
        
            } else {
                echo "Erro nos dados. Falta algum valor";
            }
        
        }
?>