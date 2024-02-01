<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioSegregacaoInterfaces;

interface PagamentoOnline 
{
    public function processarPagamentoCartaoCredito($valor);
    // public function processarPagamentoPayPal($valor);
}
