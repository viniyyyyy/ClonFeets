<?php

    class ProdutoModel{

        private $idProduto;
        private $nomeProduto;
        private $precoProduto;
        private $fotoProduto;
        private $idCategoria;

        public function setIdProduto($idProduto){
            $this->idProduto = $idProduto;
        }
        public function getIdProduto(){
            return $this->idProduto;
        }
    
        public function setNomeProduto($nomeProduto){
            $this->nomeProduto = $nomeProduto;
        }
        public function getNomeProduto(){
            return $this->nomeProduto;
        }

        public function setPrecoProduto($precoProduto){
            $this->precoProduto = $precoProduto;
        }
        public function getPrecoProduto(){
            return $this->precoProduto;
        }

        public function setFotoProduto($fotoProduto){
            $this->fotoProduto = $fotoProduto;
        }
        public function getFotoProduto(){
            return $this->fotoProduto;
        }

        public function setIdCategoria($idCategoria){
            $this->idCategoria = $idCategoria;
        }
        public function getIdCategoria(){
            return $this->idCategoria;
        }
    
    
    }
?>