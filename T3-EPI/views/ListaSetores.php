<?php
    require_once _DIR_ . "/../controllers/SetorController.php";
    $controller = new SetorController ();
    $setores = $controller->pegarListaSetores("GET");
?>

<?php if (count($setores) ! = 0): ?>
    <table>
        <tr>
            <th>Nome: </th>
        </tr>
    </table>
    <?php foreach($setores as $setor): ?>
        <tr>
            <?php echo "<td>" . $setor->getNomeSetor() . "</td>"?>
            <?php echo "<td>
                <a href='method='GET' action='./CadastroSetor.php?id='" . $setor->getIdSetor() . "'>
                <button> Editar </button>
                </a>
            </td>"?>
            <?php echo "<td><button> Apagar </button></td>"; ?>
        </tr>
    <?php endforeach;?>
<?php else: ?>
    <div>Não existe setores registrados no sistema</div>
<?php endif;?>