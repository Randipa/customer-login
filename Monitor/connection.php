<?php
class crud {
    private static $connection;

    public static function connect() {
        if (!isset(self::$connection)) {
            $host = 'localhost';
            $dbname = 'crudsystem';
            $username = 'Avindi';
            $password = 'e4VUv)W*)LS/p*u(';

            self::$connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}




?>