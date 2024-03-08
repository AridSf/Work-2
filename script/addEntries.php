<?php

require_once ("script.php");

$title = $_POST["title"] ?? null;
$content = $_POST["content"] ?? null;

$pdo = getPDO();

// Запись в таблицу с параметрами
// text');DELETE FROM entries; -- 'text      <-- Пример запроса для поля content

$sql = "INSERT INTO entries (title, content) VALUES (:title, :content)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":content", $_POST["content"]);

$stmt->execute();


redirect("/");