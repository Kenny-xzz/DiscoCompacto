<?php 


class DBConnector {
    private static $host = 'localhost';
    private static $porto = 3306;
    private static $bd = 'discocompacto';
    private static $user = 'root';
    private static $password = '1234';
    private static $conn = null;

    public static function conectar() {
        if (self::$conn === null || !self::$conn->ping()) {
            self::$conn = new mysqli(self::$host, self::$user, self::$password, self::$bd, self::$porto);

            if (self::$conn->connect_error) {
                die('Erro de Conexão: ' . self::$conn->connect_error);
            }
        }

        return self::$conn;
    }
}