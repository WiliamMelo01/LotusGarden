<?php

class Produto
{

    private $idProduto;
    private $nomeProduto;
    private $precoProduto;
    private $categoria;
    private $imagem;

    public function getIdProduto()
    {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto)
    {
        $this->idProduto = $idProduto;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function getPrecoProduto()
    {
        return $this->precoProduto;
    }

    public function setPrecoProduto($precoProduto)
    {
        $this->precoProduto = $precoProduto;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
    
    public function setImagem($imagem){
        $this->imagem = $imagem;
    }
    public function getImagem(){
        return $this->imagem;
    }
}
