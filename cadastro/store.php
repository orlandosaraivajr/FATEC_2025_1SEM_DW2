<?php
require 'db.php';
$db = new DB();
$db->insertCar($_POST['placa'], $_POST['nome_condutor'], $_POST['renavam']);
header("Location: index.php");
exit;
