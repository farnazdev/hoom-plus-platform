<?php
class Dbh {
    private $dsn = "mysql:host=localhost;dbname=hoshiser_hoomPlus;charset=utf8mb4";
    private $username = "hoshiser_hoomplus";
    private $password = "K_k721xQnM5+";
    private $pdo;

    public function __construct() {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("خطا در اتصال به دیتابیس: " . $e->getMessage());
        }
    }

    public function connect() {
        return $this->pdo;
    }
}
