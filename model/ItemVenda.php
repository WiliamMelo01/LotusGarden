<?php
    require_once 'Produto.php';

    class ItemVenda{
        private $id, $qtde, $subtotal, $produto;

        public function __construct(){
            $this->produto = new Produto();
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setQtde($qtde){
            $this->qtde = $qtde;
        }

        public function setSubtotal($subtotal){
            $this->subtotal = $subtotal;
        }

        public function setProduto($produto){
            $this->produto = $produto;
        }

        public function getId(){
            return $this->id;
        }

        public function getQtde(){
            return $this->qtde;
        }

        public function getSubtotal(){
            return $this->subtotal;
        }

        public function getProduto(){
            return $this->produto;
        }

    }