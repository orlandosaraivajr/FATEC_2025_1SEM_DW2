<?php
require 'db.php';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "ID inválido para exclusão.";
    exit;
}
$db = new DB();
$db->deleteCar($_GET['id']);
header("Location: index.php");
exit;
