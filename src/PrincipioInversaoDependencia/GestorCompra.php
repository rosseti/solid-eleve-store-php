<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia;

use Rosseti\SolidEleveStorePhp\Store\Pedido;

class GestorCompra 
{
    private $servicoEmail;

    public function __construct(ServicoEmailInterface $servicoEmail) 
    {
        $this->servicoEmail = $servicoEmail;
    }

    public function finalizarCompra(Pedido $pedido) 
    {
        // Finalizar compra
        return $this
            ->servicoEmail
            ->enviarEmail($pedido->getCliente()->getEmail(), 
                "Compra realizada com sucesso", 
                "Obrigado por comprar na Eleve Store!"
              );
    }
}
