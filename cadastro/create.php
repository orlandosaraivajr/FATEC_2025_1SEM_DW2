<?php require 'header.php'; ?>

<div class="card">
    <div class="card-header">Nova Placa</div>
    <div class="card-body">
        <form method="POST" action="store.php">
            <div class="mb-3">
                <label class="form-label">Placa</label>
                <input type="text" name="placa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nome do Condutor</label>
                <input type="text" name="nome_condutor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Renavam</label>
                <input type="text" name="renavam" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>

<?php require 'footer.php'; ?>
