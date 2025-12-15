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
                $setor = new Setor(                    
                    htmlspecialchars($_POST["nome_setor"])
                );
                
                $response = $this->dao->criarSetorDAO($setor);
                return $response;
                if ($response) {
                    return true;
                } else {
                    return false;
                }
            } else {
                echo("Inválido");
            }
        }

        public function pegarListaSetores(string $metodo) {
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

        public function atualizarSetor(string $metodo) {
            if ($metodo === "POST") {
                $nomeSetor = htmlspecialchars($_POST["nome_setor"]);
                $setorAtualizado = new Setor($nomeSetor, $idSetor);
                $response = $this->dao->atualizarSetorDAO($setorAtualizado);
                return $response;
            }
        }
    
        public function excluirSetorId(string $metodo, int $idSetor) {
            if ($metodo === "GET") {
                $idSetor = htmlspecialchars($_GET["id_setor"]);
                $response = $this->dao->excluirSetorId($idSetor);
                return $response;
           }
        }
    }

?>