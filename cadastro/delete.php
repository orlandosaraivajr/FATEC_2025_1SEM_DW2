<?php
require 'db.php';
$db = new DB();
$db->deleteCar($_GET['id']);
header("Location: index.php");
exit;
