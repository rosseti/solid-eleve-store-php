<?php

use PHPUnit\Framework\TestCase;
use Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado\CalculadoraFrete;
use Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado\CalculadoraFreteGratis;
use Rosseti\SolidEleveStorePhp\Store\Pedido;

class PrincipioAbertoFechadoTest extends TestCase
{
    public function testCalculoFrete() 
    {
        $pedido = new Pedido(1, [1], 500);

        $frete = new CalculadoraFrete();
        $valorFrete = $frete->calcularFrete($pedido);

        $this->assertEquals($valorFrete, 15);
    }

    public function testCalculoFreteGratis() 
    {
        $pedido = new Pedido(1, [1], 500);

        $frete = new CalculadoraFreteGratis();
        $valorFrete = $frete->calcularFrete($pedido);

        $this->assertEquals($valorFrete, 0);
    }
}