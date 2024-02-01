<?php

use PHPUnit\Framework\TestCase;
use Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado\CalculadoraFrete;
use Rosseti\SolidEleveStorePhp\PrincipioAbertoFechado\CalculadoraFreteGratis;
use Rosseti\SolidEleveStorePhp\Store\Cliente;
use Rosseti\SolidEleveStorePhp\Store\Pedido;

class PrincipioAbertoFechadoTest extends TestCase
{
    private $pedido;
    private $cliente;

    public function setUp() : void
    {
        $this->cliente = new Cliente('John Doe', 'john.doe@tests.com');
        $this->pedido = new Pedido(1, [1], 500, $this->cliente);
    }

    public function testCalculoFrete() 
    {
        $frete = new CalculadoraFrete();
        $valorFrete = $frete->calcularFrete($this->pedido);

        $this->assertEquals($valorFrete, 15);
    }

    public function testCalculoFreteGratis() 
    {
        $frete = new CalculadoraFreteGratis();
        $valorFrete = $frete->calcularFrete($this->pedido);

        $this->assertEquals($valorFrete, 0);
    }
}