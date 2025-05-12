<?php
require('classes/login.php');

$login = $_POST["login"];
$senha = $_POST["senha"];
$validador = new Login();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($validador->verificar_credenciais($login, $senha)) {
        header("Location: home.php");
        exit();
    }
}
$validador->logout();
header("Location: index.php");
?>