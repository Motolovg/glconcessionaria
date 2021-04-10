<?php

namespace Modelo;

abstract class Pessoa
{ 
    public string $nome;
    public CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this -> nome=$nome;
        $this -> cpf = $cpf;

    }

    
    public function getNome()
    {
        return $this -> nome;
    }

    public function getCPF()
    {
        return $this -> cpf;

    }

    public function validaNomeCliente(string $nomeCliente)
    {
        if (strlen($nomeCliente)< 5 )
        {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


}