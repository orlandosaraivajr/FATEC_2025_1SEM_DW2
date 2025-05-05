<?php
require 'db.php';
if (
    !isset($_POST['id'], $_POST['placa'], $_POST['nome_condutor'], $_POST['renavam']) ||
    !is_numeric($_POST['id']) ||
    empty(trim($_POST['placa'])) ||
    empty(trim($_POST['nome_condutor'])) ||
    empty(trim($_POST['renavam']))
) {
    echo "Dados inválidos.";
    exit;
}
$db = new DB();
$db->updateCar($_POST['id'], $_POST['placa'], $_POST['nome_condutor'], $_POST['renavam']);
header("Location: index.php");
exit;
