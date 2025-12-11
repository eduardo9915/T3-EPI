<?php
    class Produto {
        private int $idProduto;
        private string $nomeProduto;
        private string $discriminacaoProduto;
        private string $tipoProduto;
        private string $marcaProduto;
        private string $validadeProduto;
        private string $caProduto;
        private string $validadeCaProduto;
        private string $dataRegistroProduto;

        public function __construct(
            $nome_produto,
            $discriminacao_produto,
            $tipo_produto,
            $marca_produto,
            $validade_produto,
            $ca_produto,
            $ca_validade_produto,
            $data_registro_produto,
            $id_produto = 0
        ) {
            $this->idProduto = $id_produto;
            $this->nomeProduto = $nome_produto;
            $this->discriminacaoProduto = $discriminacao_produto;
            $this->tipoProduto = $tipo_produto;
            $this->marcaProduto = $marca_produto;
            $this->validadeProduto = $validade_produto;
            $this->caProduto = $ca_produto;
            $this->caValidadeProduto = $ca_validade_produto;
            $this->dataRegistroProduto = $data_registro_produto;
        }

        /**
         * Get the value of idProduto
         */ 
        public function getIdProduto()
        {
                return $this->idProduto;
        }

        /**
         * Set the value of idProduto
         *
         * @return  self
         */ 
        public function setIdProduto($idProduto)
        {
                $this->idProduto = $idProduto;

                return $this;
        }

        /**
         * Get the value of nomeProduto
         */ 
        public function getNomeProduto()
        {
                return $this->nomeProduto;
        }

        /**
         * Set the value of nomeProduto
         *
         * @return  self
         */ 
        public function setNomeProduto($nomeProduto)
        {
                $this->nomeProduto = $nomeProduto;

                return $this;
        }

        /**
         * Get the value of discriminacaoProduto
         */ 
        public function getDiscriminacaoProduto()
        {
                return $this->discriminacaoProduto;
        }

        /**
         * Set the value of discriminacaoProduto
         *
         * @return  self
         */ 
        public function setDiscriminacaoProduto($discriminacaoProduto)
        {
                $this->discriminacaoProduto = $discriminacaoProduto;

                return $this;
        }

        /**
         * Get the value of tipoProduto
         */ 
        public function getTipoProduto()
        {
                return $this->tipoProduto;
        }

        /**
         * Set the value of tipoProduto
         *
         * @return  self
         */ 
        public function setTipoProduto($tipoProduto)
        {
                $this->tipoProduto = $tipoProduto;

                return $this;
        }

        /**
         * Get the value of marcaProduto
         */ 
        public function getMarcaProduto()
        {
                return $this->marcaProduto;
        }

        /**
         * Set the value of marcaProduto
         *
         * @return  self
         */ 
        public function setMarcaProduto($marcaProduto)
        {
                $this->marcaProduto = $marcaProduto;

                return $this;
        }

        /**
         * Get the value of validadeProduto
         */ 
        public function getValidadeProduto()
        {
                return $this->validadeProduto;
        }

        /**
         * Set the value of validadeProduto
         *
         * @return  self
         */ 
        public function setValidadeProduto($validadeProduto)
        {
                $this->validadeProduto = $validadeProduto;

                return $this;
        }

        /**
         * Get the value of caProduto
         */ 
        public function getCaProduto()
        {
                return $this->caProduto;
        }

        /**
         * Set the value of caProduto
         *
         * @return  self
         */ 
        public function setCaProduto($caProduto)
        {
                $this->caProduto = $caProduto;

                return $this;
        }

        /**
         * Get the value of validadeCaProduto
         */ 
        public function getValidadeCaProduto()
        {
                return $this->validadeCaProduto;
        }

        /**
         * Set the value of validadeCaProduto
         *
         * @return  self
         */ 
        public function setValidadeCaProduto($validadeCaProduto)
        {
                $this->validadeCaProduto = $validadeCaProduto;

                return $this;
        }

        /**
         * Get the value of dataRegistroProduto
         */ 
        public function getDataRegistroProduto()
        {
                return $this->dataRegistroProduto;
        }

        /**
         * Set the value of dataRegistroProduto
         *
         * @return  self
         */ 
        public function setDataRegistroProduto($dataRegistroProduto)
        {
                $this->dataRegistroProduto = $dataRegistroProduto;

                return $this;
        }
    }
?>