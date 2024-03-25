<?php

require_once ("setting.php");

function redirect(string $path)
{
    header("Location: $path");
    die();
}

function getPDO() : PDO
{
    try {
        return new PDO(dsn: "mysql:host=". DB_HOST .";dbname=". DB_NAME, username: DB_USERNAME, password: DB_PASSWORD);
    } catch (PDOException $e) {
        die($e -> getMessage());
    }
}
