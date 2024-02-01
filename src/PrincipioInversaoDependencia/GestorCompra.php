<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia;

class GestorCompra 
{
    private $enviadorEmail;

    public function __construct(ServicoEmail $servicoEmail) 
    {
        $this->servicoEmail = $servicoEmail;
    }

    public function finalizarCompra($pedido) 
    {
        // Finalizar compra
        $this
            ->servicoEmail
            ->enviarEmail($pedido->getCliente()->getEmail(), 
                "Compra realizada com sucesso", 
                "Obrigado por comprar na Eleve Store!"
              );
    }
}
