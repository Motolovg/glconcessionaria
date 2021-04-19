<?php 
#include "valida_login.php";
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>LG concessionaria</title>
  <link rel="stylesheet" href="style-5.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	<style>
	/* Common Styles - Can ignore*/
	body{
	  background:#DCDCDC;
	  padding:75px;
	  text-align:center;
	  font-family: 'Oswald', sans-serif;
	  font-size: 18px;
	  height: 100vh;
	}
	h1{
	  color:#212121;
	  font-weight:100;
	}
	.spacer {
	 padding: 30px 0;
	}
	</style>
</head>
<body>

<!-- Style 1 Start -->
    <h1>LG concessionaria</h1>
    <nav class="style-1">
		<a href="index.php" class="btn">Home</a>
		<a href="venda.php" class="btn">Vendas</a>
		<a href="cliente.php" class="btn">Clientes</a>
		<a href="veiculo.php" class="btn">Veiculos</a>
		<a href="funcionario.php" class="btn">Funcionarios</a>
		<a href="logout.php" class="btn">Logout</a>
	</nav>
<!-- Style 1 End -->	

  <div class="spacer"></div>
  
</body>
</html>
