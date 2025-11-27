<?php
    require_once __DIR__ . "/Setor.php"
    class Usuario {
        private int $idUsuario;
        private string $nomeUsuario;
        private string $sobreNomeUsuario;
        private string $matriculaUsuario;
        private string $telefoneUsuario;
        private string $cargoUsuario;
        private string $dataAdmissaoUsuario;
        private string $dataDemissaoUsuario;
        private string $cpfUsuario;
        private string $senhaUsuario;
        private string $emailUsuario;
        private Setor $setorUsuario;

        public function __construct(
            $_nomeUsuario,
            $_sobreNomeUsuario,
            $_matriculaUsuario,
            $_telefoneUsuario,
            $_cargoUsuario,
            $_dataAdmissaoUsuario,
            $_dataDemissaoUsuario,
            $_cpfUsuario,
            $_senhaUsuario,
            $_emailUsuario,
            $_setorUsuario,
            $_idUsuario = 0
        ) {
            $this->idUsuario = $_idUsuario;
            $this->nomeUsuario = $_nomeUsuario;
            $this->sobreNomeUsuario = $_sobreNomeUsuario;
            $this->matriculaUsuario = $_matriculaUsuario;
            $this->telefoneUsuario = $_telefoneUsuario;
            $this->cargoUsuario = $_cargoUsuario;
            $this->dataAdmissaoUsuario = $_dataAdmissaoUsuario;
            $this->dataDemissaoUsuario = $_dataDemissaoUsuario;
            $this->cpfUsuario = $_cpfUsuario;
            $this->senhaUsuario = $_senhaUsuario;
            $this->emailUsuario = $_emailUsuario;
            $this->setorUsuario = $setorUsuario;
        }

        /**
         * Get the value of idUsuario
         */ 
        public function getIdUsuario()
        {
                return $this->idUsuario;
        }

        /**
         * Set the value of idUsuario
         *
         * @return  self
         */ 
        public function setIdUsuario($idUsuario)
        {
                $this->idUsuario = $idUsuario;

                return $this;
        }

        /**
         * Get the value of nomeUsuario
         */ 
        public function getNomeUsuario()
        {
                return $this->nomeUsuario;
        }

        /**
         * Set the value of nomeUsuario
         *
         * @return  self
         */ 
        public function setNomeUsuario($nomeUsuario)
        {
                $this->nomeUsuario = $nomeUsuario;

                return $this;
        }

        /**
         * Get the value of sobreNomeUsuario
         */ 
        public function getSobreNomeUsuario()
        {
                return $this->sobreNomeUsuario;
        }

        /**
         * Set the value of sobreNomeUsuario
         *
         * @return  self
         */ 
        public function setSobreNomeUsuario($sobreNomeUsuario)
        {
                $this->sobreNomeUsuario = $sobreNomeUsuario;

                return $this;
        }

        /**
         * Get the value of matriculaUsuario
         */ 
        public function getMatriculaUsuario()
        {
                return $this->matriculaUsuario;
        }

        /**
         * Set the value of matriculaUsuario
         *
         * @return  self
         */ 
        public function setMatriculaUsuario($matriculaUsuario)
        {
                $this->matriculaUsuario = $matriculaUsuario;

                return $this;
        }

        /**
         * Get the value of telefoneUsuario
         */ 
        public function getTelefoneUsuario()
        {
                return $this->telefoneUsuario;
        }

        /**
         * Set the value of telefoneUsuario
         *
         * @return  self
         */ 
        public function setTelefoneUsuario($telefoneUsuario)
        {
                $this->telefoneUsuario = $telefoneUsuario;

                return $this;
        }

        /**
         * Get the value of cargoUsuario
         */ 
        public function getCargoUsuario()
        {
                return $this->cargoUsuario;
        }

        /**
         * Set the value of cargoUsuario
         *
         * @return  self
         */ 
        public function setCargoUsuario($cargoUsuario)
        {
                $this->cargoUsuario = $cargoUsuario;

                return $this;
        }

        /**
         * Get the value of dataAdmissaoUsuario
         */ 
        public function getDataAdmissaoUsuario()
        {
                return $this->dataAdmissaoUsuario;
        }

        /**
         * Set the value of dataAdmissaoUsuario
         *
         * @return  self
         */ 
        public function setDataAdmissaoUsuario($dataAdmissaoUsuario)
        {
                $this->dataAdmissaoUsuario = $dataAdmissaoUsuario;

                return $this;
        }

        /**
         * Get the value of dataDemissaoUsuario
         */ 
        public function getDataDemissaoUsuario()
        {
                return $this->dataDemissaoUsuario;
        }

        /**
         * Set the value of dataDemissaoUsuario
         *
         * @return  self
         */ 
        public function setDataDemissaoUsuario($dataDemissaoUsuario)
        {
                $this->dataDemissaoUsuario = $dataDemissaoUsuario;

                return $this;
        }

        /**
         * Get the value of cpfUsuario
         */ 
        public function getCpfUsuario()
        {
                return $this->cpfUsuario;
        }

        /**
         * Set the value of cpfUsuario
         *
         * @return  self
         */ 
        public function setCpfUsuario($cpfUsuario)
        {
                $this->cpfUsuario = $cpfUsuario;

                return $this;
        }

        /**
         * Get the value of senhaUsuario
         */ 
        public function getSenhaUsuario()
        {
                return $this->senhaUsuario;
        }

        /**
         * Set the value of senhaUsuario
         *
         * @return  self
         */ 
        public function setSenhaUsuario($senhaUsuario)
        {
                $this->senhaUsuario = $senhaUsuario;

                return $this;
        }

        /**
         * Get the value of emailUsuario
         */ 
        public function getEmailUsuario()
        {
                return $this->emailUsuario;
        }

        /**
         * Set the value of emailUsuario
         *
         * @return  self
         */ 
        public function setEmailUsuario($emailUsuario)
        {
                $this->emailUsuario = $emailUsuario;

                return $this;
        }

        /**
         * Get the value of setorUsuario
         */ 
        public function getSetorUsuario()
        {
                return $this->setorUsuario;
        }

        /**
         * Set the value of setorUsuario
         *
         * @return  self
         */ 
        public function setSetorUsuario($setorUsuario)
        {
                $this->setorUsuario = $setorUsuario;

                return $this;
        }
    } 

    /* */
?>