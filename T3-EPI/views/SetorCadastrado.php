<?php
    require_once __DIR__ . "/../controllers/SetorController.php";
    $controller = new SetorController();
    $response = $controller->criarSetor();

    if ($response) {
        echo("<h4>Setor cadastrado com sucesso!</h4>");
    } else {
        echo("<h4>Setor não foi cadastrado.</h4>");
    }
?>