<?php
require 'db.php';
$db = new DB();
if (
    !isset($_POST['placa'], $_POST['nome_condutor'], $_POST['renavam']) ||
    empty(trim($_POST['placa'])) ||
    empty(trim($_POST['nome_condutor'])) ||
    empty(trim($_POST['renavam']))
) {
    echo "Todos os campos são obrigatórios.";
    exit;
}
$db->insertCar($_POST['placa'], $_POST['nome_condutor'], $_POST['renavam']);
header("Location: index.php");
exit;
