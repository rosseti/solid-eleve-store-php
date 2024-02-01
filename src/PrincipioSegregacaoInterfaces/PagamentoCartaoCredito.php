<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioSegregacaoInterfaces;

class PagamentoCartaoCredito implements PagamentoOnline 
{
    public function processarPagamentoCartaoCredito($valor) 
    {
        // Processar pagamento com cartão de crédito
    }
}