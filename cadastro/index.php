<?php
require 'db.php';
require 'header.php';

$db = new DB();
$carros = $db->getAllCars();
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Placas Cadastradas</h1>
    <a href="create.php" class="btn btn-success">Cadastrar Nova</a>
</div>

<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Placa</th><th>Condutor</th><th>Renavam</th><th>Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($carros as $carro): ?>
        <tr>
            <td><?= htmlspecialchars($carro['placa']) ?></td>
            <td><?= htmlspecialchars($carro['nome_condutor']) ?></td>
            <td><?= htmlspecialchars($carro['renavam']) ?></td>
            <td>
                <a href="edit.php?id=<?= $carro['id'] ?>" class="btn btn-sm btn-primary">Editar</a>
                <a href="delete.php?id=<?= $carro['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza?')">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require 'footer.php'; ?>
