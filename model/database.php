<?php
class Database {
    private static $connection;

    public static function connect() {
        if (!isset(self::$connection)) {
            self::$connection = new mysqli('localhost', 'root@localhost', '', 'tienda');
            if (self::$connection->connect_error) {
                die("Error de conexión: " . self::$connection->connect_error);
            }
            echo "conexion";    
        }
        return self::$connection;
    }

    public static function disconnect() {
        if (isset(self::$connection)) {
            self::$connection->close();
            self::$connection = null;
        }
    }
}
?>
