<?php
    require_once __DIR__ . "/../controllers/UsuarioController.php";
    $controller = new UsuarioController();
    $response = $controller->criarUsuario();

    if ($response) {
        echo("<h4>Usuario cadastrado com sucesso!</h4>");
    } else {
        echo("<h4>Usuario não foi cadastro.</h4>");
    }
?>