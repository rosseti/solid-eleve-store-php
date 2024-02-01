<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia;

interface ServicoEmail
{
    public function enviarEmail($destinatario, $assunto, $mensagem);
}
