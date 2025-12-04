<?php
    require_once __DIR__ . "/../models/Setor.php";
    require_once __DIR__ . "/../repositories/SetorDAO.php";
    class SetorController {
        private SetorDAO $dao;
        public function __construct() {
            $this->dao = new SetorDAO();
        }

        public function criarSetor() {
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $nomeSetor = htmlspecialchars($_POST["setorNome"]);
                $setor = new Setor($nomeSetor);

                $response = $this->dao->criarSetorDAO($setor);
                return $response;
            }
            echo("Inválido");
        }
    }
?>