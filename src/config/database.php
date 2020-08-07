<?php

class Database {

    public static function getConnetion() {

        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'],
                $env['username'],
                $env['password'],
                $env['database']);


        if ($conn->connect_errno) {
            die("Errro na conxão" . $conn->connect_errno);
        }

        return $conn;
    }

    public static function getRessourceFromQuery($sql) {
        $conn = self::getConnetion();
        $result = $conn->query($sql);
        return $result;
    }

}
