<?php

namespace App\Core;

use PDO;
use PDOException;

abstract class Model
{
    protected $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $config = require __DIR__ . '/../config/config.php';

        $dsn = "mysql:host={$config['db_host']};dbname={$config['db_name']}";

        try {
            $this->conn = new PDO($dsn, $config['db_user'], $config['db_pass']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Помилка з'єднання: " . $e->getMessage());
        }
    }

    protected function execute(string $sql, array $params = [], bool $fetchAll = true)
    {
        try {
            $stmt = $this->conn->prepare($sql);

            foreach ($params as $key => &$value) {
                $stmt->bindParam($key, $value);
            }

            $stmt->execute();

            return $fetchAll ? $stmt->fetchAll(PDO::FETCH_ASSOC) : $stmt->rowCount();
        } catch (PDOException $e) {
            die("Помилка запиту: " . $e->getMessage());
        }
    }
}
