<?php
    require_once __DIR__ . "/../controllers/ProdutoController.php";
    $controller = new ProdutoController();
    $response = $controller->criarProduto();

    if ($response) {
        echo("<h4>Produto cadastrado com sucesso!</h4>");
    } else {
        echo("<h4>Produto não foi cadastrado.</h4>");
    }
?>