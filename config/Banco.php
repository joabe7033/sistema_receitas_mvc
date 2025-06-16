<?php 
class Banco {
    private static $conn = null;

    public static function getConn() {
        if (self::$conn === null) {
            try {
                // $dsn = 'mysql:host=localhost;dbname=receitacadastrologin;charset=utf8';
                $dsn = 'mysql:host=localhost;port=3307;dbname=receitacadastrologin;charset=utf8';
                self::$conn = new PDO($dsn, 'root', '', [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            } catch (PDOException $e) {
                echo "Erro de conexão: " . $e->getMessage();
                exit;
            }
        }
        return self::$conn;
    }
}

?>