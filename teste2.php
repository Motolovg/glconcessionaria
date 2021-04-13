<?php

require_once 'ConnectionCreator.php';

$pdo=ConnectionCreator::createConnection();


$nome="Lucas";
$cpf="12345566-12";
$endereco="Rua das Flores";
$bairro="Sol";
$telefone='123456997';

$sql="INSERT INTO LG.proprietario(nome, cpf, endereco, bairro, telefone)VALUES('$nome','$cpf','$endereco','$bairro','$telefone');";

var_dump($pdo->exec($sql));