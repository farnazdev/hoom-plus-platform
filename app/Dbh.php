<?php
class Dbh {
    private $dsn = "mysql:host=XXX;dbname=XXX;charset=utf8mb4";
    private $username = "XXX";
    private $password = "XXX";
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
