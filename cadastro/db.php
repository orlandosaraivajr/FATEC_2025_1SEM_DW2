<?php

class DB {
    private $host = "localhost";
    private $dbname = "estacionamento_fatec";
    private $username = "root";
    private $password = "123mudar";
    private $pdo;

    public function __construct() {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname;charset=utf8";
            $this->pdo = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }

    public function __destruct() {
        $this->pdo = null; // Encerra a conexão
    }

    private function execute($sql, $params = []) {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function getAllCars() {
        return $this->execute("SELECT * FROM carros")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCarById($id) {
        return $this->execute("SELECT * FROM carros WHERE id = ?", [$id])->fetch(PDO::FETCH_ASSOC);
    }

    public function insertCar($placa, $nome, $renavam) {
        $this->execute("INSERT INTO carros (placa, nome_condutor, renavam) VALUES (?, ?, ?)", [
            $placa, $nome, $renavam
        ]);
    }

    public function updateCar($id, $placa, $nome, $renavam) {
        $this->execute("UPDATE carros SET placa = ?, nome_condutor = ?, renavam = ? WHERE id = ?", [
            $placa, $nome, $renavam, $id
        ]);
    }

    public function deleteCar($id) {
        $this->execute("DELETE FROM carros WHERE id = ?", [$id]);
    }
}
