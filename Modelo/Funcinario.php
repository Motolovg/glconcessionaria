<?php 

namespace Modelo;

use Modelo\CPF;
use Modelo\Pessoa;


class Funcionario extends Pessoa 
{
    public int $idFunc;

    public function __construct(string $nome, CPF $cpf, int $idFunc )
    {
        parent:: __construct ($nome, $cpf);
        $this -> idFunc = $idFunc;
        
    }

    public function getIdfunc(): string 
    {
        return $this ->idFunc;
    }

    #

}