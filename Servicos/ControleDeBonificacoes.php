<?php

namespace Servicos;

use Modelo\Funcionario\Funcionario;

class ControleDeBonificacoes
{
    public $totalAdicional =0;

    public function adicionalVenda( #Funcionario $funcionario)
    {
        $this ->totalAdcional += $funcionario->cacularAdcional();

    }

    public function getTotal():float
    {
        return $this->totalAdicional;
    }

}