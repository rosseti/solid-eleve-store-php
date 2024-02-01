<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado;

use Rosseti\SolidEleveStorePhp\Store\Pedido;

class CalculadoraFrete 
{
    public function calcularFrete(Pedido $pedido) 
    {
        $itemCount = count($pedido->getItens());

        if ($itemCount == 1) 
        {
            return 15;
        } else if ($itemCount == 2) 
        {
            return 30;
        }

        return 45;
    }
}
