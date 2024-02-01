<?php

namespace Rosseti\SolidEleveStorePhp\PrincipioInversaoDependencia;

interface ServicoEmailInterface
{
    public function enviarEmail($destinatario, $assunto, $mensagem);
}
