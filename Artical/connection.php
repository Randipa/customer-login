<?php
class crud {
    private static $connection;

    public static function connect() {
        if (!isset(self::$connection)) {
            $host  = "localhost"; // Change this to your MySQL server name
            $username = "Chami"; // Change this to your MySQL username
            $password = "Nd-V7CzjlbgReAHD"; // Change this to your MySQL password
            $dbname = "article"; // Change this to the name of your MySQL database

            

            self::$connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}




?>