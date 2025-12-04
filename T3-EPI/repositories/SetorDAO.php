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
                $response = $stmt->execute();
                echo("Resposta: $response");
            } catch (PDOExpection $e){
                echo("Error" . $e->getMessage());
                $response = false;
                return $response
            }
        }

        public function pegarListaSetores () {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM setor";
                $stmt = $conn->prepare($sql);
                $response = $stmt->execute();
                $setores = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $setores
                echo("retorno da lista de setores: $response")
            } catch (PDOException $e) {
                error_log("Erro na execução da query" . $e->getMessage());
                return [];
            }

        }

        public function pegarSetorId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM setor WHERE id_setor = :id";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                $setor = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $setor;
            }
            catch (PDOExpection $e){
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }

        public function excluirSetorId()
    }
?>