<?php
    require_once __DIR__ . "/../utils/Conexao.php";
    require_once __DIR__ . "/../models/Produto.php";
    class ProdutoDAO extends Conexao {

        public function __construct () {}

        public function criarProdutoDao(Produto $produto) {
            $conn = $this->fazerConexao();
            try {
                $sql = "INSERT INTO produto (nome_produto) VALUES (:nome_produto)";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome_produto", $produto->getNomeProduto(), PDO::PARAM_STR);
                $response = $stmt->execute();
            } catch (PDOExpection $e) {
                echo("Erro na execução da query" . $e->getMessage());
                $response = false;
                return $response;
            }
        }

        public function pegarListaProdutos () {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM produto";
                $stmt = $conn->prepare($sql);
                $response = $stmt->execute();
                $produtos = $stmt->fetchAll(PDO::PARAM_ASSOC);
                return $produtos;
                echo ("retorno da lista de produtos: $response");
            } catch (PDOExpection) {
                error_log("Erro na execução da query" . $e->getMessage());
                return [];
            }
        }

        public function pegarProdutoId (int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $stmt->execute();
                $produto = $stmt->fetchAll(PDO::PARAM_ASSOC);
                return $usuario;
            } catch (PDOExpection $e) {
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }

        public function excluirProdutoId(int $id) {
            $conn = $this->fazerConexao();
            try {
                $sql = "DELETE FROM produto WHERE id_produto = :id_produto";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(":id", $id, PDO::PARAM_INT);
                $produto = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $stmt->execute();
            } catch (PDOExpection) {
                error_log("Erro na execução da query" . $e->getMessage());
                return null;
            }
        }

        public function atualizarProdutoDAO(Produto $produtoAtualizado) {
            $conn = $this->fazerConexao();
            try {
                $sql = "UPDATE produto SET nome_produto = :nome_produto WHERE id_produto = :id_produto";
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(":nome_produto", $produtoAtualizado->getNomeProduto(), PDO::PARAM_STR);
                $stmt->bindValue(":id_produto", $produtoAtualizado->getNomeProduto(), PDO::PARAM_STR);
                $response = $this->dao->atualizarProdutoDAO ($produtoAtualizado);
                return $response;
            }  catch (PDOExpection $e){
                error_log("Erro na execução da query" . $e->getMessage());
                $response = false;
                return $response;
            }
        }
    }
?>    
