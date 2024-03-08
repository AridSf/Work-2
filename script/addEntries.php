<?php

require_once ("script.php");

$title = $_POST["title"] ?? null;
$content = $_POST["content"] ?? null;

$pdo = getPDO();

// Простой вариант записи в таблицу данных

$sql = "INSERT INTO entries (title, content) VALUES ('$title', '$content')";

$pdo->exec($sql);


redirect("/");