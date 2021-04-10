<?php 

namespace Modelo\Compra;

use Modelo\Endereco;
use Modelo\Pessoa;
use Modelo\CPF;

class Cliente extends Pessoa
{
    public Endereco $endereco;
    public int $idCliente;
    
    public function __construct(CPF $cpf, string $nome, Endereco $endereco, int $idCliente)
    {
        parent::__construct ($nome, $cpf);
        $this ->idCliente=$idCliente;
        $this-> endereco= $endereco;  
    }

    public function getIdCliente():int
    {
        return $this->idCliente;
    }

    public function getEnderco()
    {
        return $this -> endereco;
    }
    
}