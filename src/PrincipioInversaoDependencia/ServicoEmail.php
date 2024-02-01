<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia;

class ServicoEmail implements ServicoEmailInterface
{
    public function enviarEmail($destinatario, $assunto, $mensagem)
    {
        return true;
    }
}
