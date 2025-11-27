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
            } finally {
                return $response;
            }
        }
    }
?>