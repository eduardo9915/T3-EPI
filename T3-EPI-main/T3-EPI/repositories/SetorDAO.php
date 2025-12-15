<?php
    require_once __DIR__ . "/../utils/Conexao.php";
    require_once __DIR__ . "/../models/Setor.php";
    class SetorDAO extends Conexao {
        
        public function __construct() {}

        public function criarSetorDAO(Setor $setor) {
            $conn = $this->fazerConexao();
            try{
                $sql = "INSERT INTO setor (nome_setor) VALUES (:nome_setor)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome_setor", $setor->getNomeSetor(), PDO::PARAM_STR);
                $stmt->execute();
                $response = true;
            } catch (PDOException $e){
                echo("Error" . $e->getMessage());
                $response = false;
            }
            return $response;
        }

        public function pegarListaSetoresDAO() {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM setor";
                $stmt = $conn->prepare($sql);
                $response = $stmt->execute();
                $setores = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $setores;
                echo("retorno da lista de setores: $response");
            } catch (PDOException $e) {
                error_log("Erro na execução da query" . $e->getMessage());
                return [];
            }

        }

        public function pegarSetorId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM setor WHERE id_setor = :id_setor";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":id_setor", $id, PDO::PARAM_INT);
                $stmt->execute();
                $setor = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $setor;
            } catch (PDOException $e){
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }


        public function excluirSetorId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "DELETE FROM setor WHERE id_setor = :id_setor";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":id_setor", $id, PDO::PARAM_INT);
                $response = $stmt->execute();
                $setor = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $response;
            } catch (PDOException $e){
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }

        public function atualizarSetorDAO(Setor $setorAtualizado) {
            $conn = $this->fazerConexao();
            try {
                $sql = "UPDATE setor SET nome_setor = :nomeSetor WHERE id_setor = :id_setor";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nomeSetor", $setorAtualizado->getNomeSetor(), PDO::PARAM_STR);
                $stmt->bindValue(":idSetor", $setorAtualizado->getIdSetor(), PDO::PARAM_STR);
                $response = $this->dao->atualizarSetorDAO ($setorAtualizado);
                return $response;
            } catch (PDOException $e){
                error_log("Erro na execução da query" . $e->getMessage());
                return false;
            }
        }
    }
?>