<?php
    require_once __DIR__ . "/../controllers/SetorController.php";

    $controller = new SetorController();
    $setores = $controller->pegarListaSetores("GET");
?>

<?php if (count($setores) > 0): ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>

        <?php foreach ($setores as $setor): ?>
            <tr>
                <?php echo "<td>" . $setor->getNomeSetor() . "</td>" ?>
                <?php echo "<td>
                    <a href='./CadastroSetor.php?id=" . $setor->getIdSetor() . "&nome=" . $setor->getNomeSetor() . "'> 
                        <button>Editar</button>
                    </a>
                </td>";
                ?> 
                <?php echo "<td>
                    <a href='./SetorDeletado.php?id=" . $setor->getIdSetor() ."'>
                        <button>Apagar</button>
                    </a>
                </td>"?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <div>Não existem setores registrados no sistema</div>
<?php endif; ?>
