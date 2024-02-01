<?php

use PHPUnit\Framework\TestCase;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\GestorCompra;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\ServicoEmail;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\ServicoEmailSmtp;
use Rosseti\SolidEleveStorePhp\Store\Cliente;
use Rosseti\SolidEleveStorePhp\Store\Pedido;

class PrincipioInversaoDependenciaTest extends TestCase
{
    public function setUp() : void
    {
        $this->cliente = new Cliente('John Doe', 'john.doe@tests.com');
        $this->pedido = new Pedido(1, [1], 500, $this->cliente);
    }

    public function testFinalizarCompraEnviaEmail()
    {
        $servicoEmail = new ServicoEmail();
        $gestorCompra = new GestorCompra($servicoEmail);
        $response = $gestorCompra->finalizarCompra($this->pedido);

        $this->assertTrue($response);
    }
}
