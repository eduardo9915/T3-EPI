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

        public function pegarListaSetores (string $metodo) {
            if ($metodo === "GET") {
                $listaSetoresDAO = $this->dao->pegarListaSetoresDAO();
                $setoresView = [];
    
                foreach ($listaSetoresDAO as $setorArrayAssociativo){
                    echo("Nome: " . $setorArrayAssociativo["nome_setor"] . "<br>");
                    $setorObjeto = new Setor ($setorArrayAssociativo["nome_setor"], $setorArrayAssociativo["id_setor"]);
                    $setoresView[] = $setorObjeto;
                }
    
                return $setoresView;
            }    
        }
    
        public function excluirSetorId(string $metodo) {
            if ($metodo === "GET") {
                $id = htmlspecialchars($_GET["id"]);
                $response = $this->dao->excluirSetorId($id);
                return $response;
           }
        }
    }

?>