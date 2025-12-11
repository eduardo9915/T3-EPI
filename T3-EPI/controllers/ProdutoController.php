<?php
    require_once __DIR__ . "/../models/Produto.php";
    require_once __DIR__ . "/../repositories/ProdutoDAO.php";
    class ProdutoController {
        private ProdutoDAO $dao;
        public function __construct(){
            $this->dao = new ProdutoDAO();
        }

        public function criarProduto(){
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $nomeProduto = htmlspecialchars($_POST["produtoNome"]);
                $produto = new Produto($nomeProduto);
                $response = $this->dao->criarProdutoDAO($produto);
                return $response;
            } else {
                echo("Inválido");
            }
        }

        public function pegarListaProdutos (string $metodo) {
            if ($metodo === "GET") {
                $listaProdutosDAO = $this->dao->pegarListaProdutosDAO();
                $produtosView = [];
    
                foreach ($listaProdutosDAO as $produtoArrayAssociativo){
                    echo("Nome: " . $produtoArrayAssociativo["nome_produto"] . "<br>");
                    $produtoObjeto = new Produto ($produtoArrayAssociativo["nome_produto"], $produtoArrayAssociativo["id_produto"]);
                    $produtosView[] = $produtoObjeto;
                }
                return $produtosView;
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