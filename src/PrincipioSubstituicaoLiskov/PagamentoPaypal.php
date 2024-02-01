<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioSubstituicaoLiskov;

class PagamentoPayPal extends Pagamento 
{
    public function processarPagamento($valor) 
    {
        // Processar pagamento via PayPal
    }
}
