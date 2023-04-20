<?php
session_start(); // начинаем сессию
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$age = $_SESSION['age'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Страница 2</title>
</head>
<body>
  <p>Фамилия: <?php echo $surname; ?></p>
  <p>Имя: <?php echo $name; ?></p>
  <p>Возраст: <?php echo $age; ?></p>
</body>
</html>