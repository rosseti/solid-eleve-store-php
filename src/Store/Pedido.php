<?php

namespace Rosseti\SolidEleveStorePhp\Store;

class Pedido 
{
    private $id;
    private $itens;
    private $total;
    private $cliente;

    public function __construct($id, $itens, $total, $cliente) 
    {
        $this->id = $id;
        $this->itens = $itens;
        $this->total = $total;
        $this->cliente = $cliente;
    }

    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getItens() 
    {
        return $this->itens;
    }

    public function setItens($itens) 
    {
        $this->itens = $itens;
    }

    public function getTotal() 
    {
        return $this->total;
    }

    public function setTotal($total) 
    {
        $this->total = $total;
    }

    public function getCliente() : Cliente
    {
        return $this->cliente;
    }
}
