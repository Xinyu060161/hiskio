<?php
echo "3";

class connection
{
    public PDO $pdo;

    public function __construct()
    {
        echo "test";
        // 假設這裡創建了一個 PDO 實例
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=HISKio_test2024', 'username', 'password');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>