<?php
namespace App\Database;

class Connection
{
    protected static $pdo;

    public static function make()
    {
        if (!self::$pdo) {
            $config = require __DIR__ . '/../../config/app.php';
            $db = $config['database'];
            self::$pdo = new \PDO(
                "mysql:host={$db['host']};dbname={$db['database']}",
                $db['username'],
                $db['password'],
                [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$pdo;
    }
}