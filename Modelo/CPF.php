<?php

namespace Modelo;


class CPF
{
    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);
        if ($numero === false){
            echo "Cpf invalido";
            exit();
        }
        $this->numero =$numero;
    }
    public function getnumero()
    {
        return $this ->numero; 
    }
}