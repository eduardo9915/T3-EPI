<?php
    abstract class Conexao {
        protected string $nomeUsuario = "root";
        protected string $servidor = "127.0.0.1";
        protected string $senha = "";
        protected string $porta = "3306";
        protected string $bancoDados = "epi_paulo";

        public function __contrusct() {}
        public function fazerConexao(): PDO {             
            try{
                $conn = new PDO(
                    "mysql:host=" . $this->servidor . ";dbname=" . $this->bancoDados . ";port=" . $this->porta,
                    $this->nomeUsuario,
                    $this->senha
                );

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo("Sucesso da conexão com banco de dados");
            } catch (PDOExpection $e) {
                echo("Problema na conexão com danco de dados" . $e->getMessage());
            } finally {
                return $conn;
            }

             public function encerrarConexao(PDO $conn) {}
        }
    }
?>