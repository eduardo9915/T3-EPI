<?php
    require_once __DIR__ . "/../utils/Conexao.php";
    require_once __DIR__ . "/../models/Usuario.php";
    
    class UsuarioDAO extends Conexao {

        public function __construct(){}

        public function criarUsuarioDAO(Usuario $usuario){
            $conn = $this->fazerConexao();
            try {
                $sql = "INSERT INTO usuario (nome_usuario) VALUES (:nome_usuario)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome_usuario", $usuario->getNomeUsuario(), PDO::PARAM_STR);
                $response = $stmt->execute();
                echo("Resposta: $response");
            } catch (PDOExpection $e){
                echo("Erro na execução da query" . $e->getMessage());
                $response = false;
                return $response;
            }   
        }

        public function pegarListaUsuarios () {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM usuario";
                $stmt = $conn->prepare($sql);
                $response = $stmt->execute();
                $usuarios = $stmt->fetchAll(PDO::PARAM_ASSOC);
                return $usuarios;
                echo ("retorno da lista de usuarios: $response");
            } catch (PDOExpection $e) {
                error_log("Erro na execução da query" . $e->getMessage());
                return [];
            }
        }

        public function pegarUsuarioId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":id_usuario", $id, PDO::PARAM_INT);
                $stmt->execute();
                $usuario = $stmt->fetchAll(PDO::PARAM_ASSOC);
                return $usuario; 
            } catch (PDOExpection $e){
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }
        
        public function excluirUsuarioId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $stmt->execute();
            } catch (PDOExpection) {
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }

        public function atualizarUsuarioDAO(Usuario $usuarioAtualizado) {
            $conn = $this->fazerConexao();
            try {
                $sql = "UPDATE usuario SET nome_usuario = :nome_usuario WHERE id_usuario = :id_usuario";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome_usuario", $usuarioAtualizado->getNomeUsuario(), PDO::PARAM_STR);
                $stmt->bindValue(":id_usuario", $usuarioAtualizado->getNomeUsuario(), PDO::PARAM_STR);
                $response = $this->dao->atualizarUsuarioDAO ($usuarioAtualizado);
                return $response
            }
        }
    }
?>