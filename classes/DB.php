<?php


class DB{
    private static function connnect() {

        $pdo = new PDO('mysql:host=127.0.0.1;dbname=howCode;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    public static function query($query, $params = array()) {
        $stmt = self::connnect()->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll();
    }
}