<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado;

use Rosseti\SolidEleveStorePhp\Store\Pedido;

class CalculadoraFreteGratis extends CalculadoraFrete 
{
    public function calcularFrete(Pedido $pedido) 
    {
        return 0;
    }
}
