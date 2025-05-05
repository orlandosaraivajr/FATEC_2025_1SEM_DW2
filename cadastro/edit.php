<?php
require 'db.php';
require 'header.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<div class='alert alert-danger'>ID inválido.</div>";
    require 'footer.php';
    exit;
}

$db = new DB();
$carro = $db->getCarById($_GET['id']);
if (!$carro) {
    echo "<div class='alert alert-warning'>Carro não encontrado.</div>";
    require 'footer.php';
    exit;
}
?>

<div class="card">
    <div class="card-header">Editar Placa</div>
    <div class="card-body">
        <form method="POST" action="update.php">
            <input type="hidden" name="id" value="<?= htmlspecialchars($carro['id']) ?>">
            <div class="mb-3">
                <label class="form-label">Placa</label>
                <input type="text" name="placa" class="form-control" value="<?= htmlspecialchars($carro['placa']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nome do Condutor</label>
                <input type="text" name="nome_condutor" class="form-control" value="<?= htmlspecialchars($carro['nome_condutor']) ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Renavam</label>
                <input type="text" name="renavam" class="form-control" value="<?= htmlspecialchars($carro['renavam']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

<?php require 'footer.php'; ?>
