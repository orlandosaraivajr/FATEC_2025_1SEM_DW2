<?php
require 'db.php';
$db = new DB();
$carros = $db->getAllCars();
?>
<h1>Placas Cadastradas</h1>
<a href="create.php">Cadastrar Nova</a>
<table border="1">
    <tr>
        <th>Placa</th><th>Condutor</th><th>Renavam</th><th>Ações</th>
    </tr>
    <?php foreach ($carros as $carro): ?>
        <tr>
            <td><?= htmlspecialchars($carro['placa']) ?></td>
            <td><?= htmlspecialchars($carro['nome_condutor']) ?></td>
            <td><?= htmlspecialchars($carro['renavam']) ?></td>
            <td>
                <a href="edit.php?id=<?= $carro['id'] ?>">Editar</a> |
                <a href="delete.php?id=<?= $carro['id'] ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

