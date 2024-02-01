<?php

use PHPUnit\Framework\TestCase;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\GestorCompra;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\ServicoEmail;
use Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\ServicoEmailSmtp;
use Rosseti\SolidEleveStorePhp\Store\Cliente;
use Rosseti\SolidEleveStorePhp\Store\Pedido;

class PrincipioInversaoDependenciaTest extends TestCase
{
    public function testFinalizarCompraEnviaEmail()
    {
        $pedido = $this->getMockBuilder(Pedido::class)
                       ->disableOriginalConstructor()
                       ->getMock();
        
        $cliente = $this->getMockBuilder(Cliente::class)
                        ->disableOriginalConstructor()
                        ->getMock();

        // Defina o método getEmail() para retornar um e-mail de cliente fictício
        $cliente->expects($this->once())
                ->method('getEmail')
                ->willReturn('cliente@example.com');

        // Defina o método getCliente() do pedido para retornar o cliente fictício
        $pedido->expects($this->once())
               ->method('getCliente')
               ->willReturn($cliente);

        $servicoEmail = $this->getMockBuilder(\Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia\ServicoEmail::class)
               ->disableOriginalConstructor()
               ->getMock();

        $gestorCompra = new GestorCompra($servicoEmail);
        $gestorCompra->finalizarCompra($pedido);
    }
}
