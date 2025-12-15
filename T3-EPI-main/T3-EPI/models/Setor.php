<?php
    class Setor {
        private int $idSetor;
        private string $nomeSetor;

        public function __construct(
            $_nomeSetor,
            $_idSetor = 0
        ) {
            $this->idSetor = $_idSetor;
            $this->nomeSetor = $_nomeSetor;
        }

        /**
         * Get the value of idSetor
         */ 
        public function getIdSetor()
        {
                return $this->idSetor;
        }

        /**
         * Set the value of idSetor
         *
         * @return  self
         */ 
        public function setIdSetor($idSetor)
        {
                $this->idSetor = $idSetor;

                return $this;
        }

        /**
         * Get the value of nomeSetor
         */ 
        public function getNomeSetor()
        {
                return $this->nomeSetor;
        }

        /**
         * Set the value of nomeSetor
         *
         * @return  self
         */ 
        public function setNomeSetor($nomeSetor)
        {
                $this->nomeSetor = $nomeSetor;

                return $this;
        }
    }
?>