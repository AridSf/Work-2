<?php
    require_once("script/script.php");

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Страница</title>
    <link rel="stylesheet" href="/stylePages.css">
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>Главная страница</h1>
        </div>

        <div class="main">

            <form action="/script/addEntries.php" method="post" enctype="multipart/form-data" class="entriesForm">
                <h2>Добавить запись</h2>
                <p>Заголовок записи <input type="text"
                    placeholder="Заголовок записи"
                    name="title"
                    required></p>

                <p>Текст записи <input type="text"
                       placeholder="Текст записи"
                       name="content"
                       required></p>

                <p><input type="submit"></p>

            </form>

            <p>

            </p>

        </div>
    </div>
</body>
</html>