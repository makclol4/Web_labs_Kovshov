<?php
// Получение данных из формы
$email = $_POST["email"];
$category = $_POST["category"];
$title = $_POST["title"];
$text = $_POST["text"];

// Создание файла с объявлением
$file = "announcements/$category/$title.txt";
file_put_contents($file, $text);

// Перенаправление на главную страницу
header("Location: index.php");
exit();
?>