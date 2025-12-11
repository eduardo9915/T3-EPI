<?php
    require_once __DIR__ . "/../models/Usuario.php";
    require_once __DIR__ . "/../repositories/UsuarioDAO.php";
    class UsuarioController {
        private UsuarioDAO $dao;
        public function __construct(){
            $this->dao = new UsuarioDAO();
        }

        public function criarUsuario(){
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $nomeUsuario = htmlspecialchars($_POST["usuarioNome"]);
                $usuario = new Usuario($nomeUsuario);
                $response = $this->dao->criarUsuarioDAO($usuario);
                return $response;
            }
            echo("Inválido");
        }
    }

    public function pegarListaUsuaruios (string $metodo) {
        if ($metodo === "GET") {
            $listaUsuaruiosDAO = $this->dao->pegarListaUsuaruiosDAO();
            $usuaruiosView = [];

            foreach ($listaUsuaruiosDAO as $usuarioArrayAssociativo){
                echo("Nome: " $usuarioArrayAssociativo["nome_usuario"] . "<br>");
                $usuarioObjeto = new Usuario ($usuarioArrayAssociativo["nome_usuario"], $usuarioArrayAssociativo["id_usuario"]);
                $usuaruiosView[] = $usuarioObjeto;
            }

            return $usuaruiosView;
        }    
    }

    public function excluirUsuarioId(string $metodo) {
        if ($metodo === "GET") {
            $id = htmlspecialchars($_GET["id"]);
            $response = $this->dao->excluirUsuarioId($id);
            return $response;
        }
    }
?>