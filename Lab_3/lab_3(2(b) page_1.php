<?php
session_start(); // начинаем сессию
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['surname'] = $_POST['surname'];
  $_SESSION['age'] = $_POST['age'];
  header('Location: page2.php'); // перенаправляем на другую страницу
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Страница 1</title>
</head>
<body>
  <form method="post">
    <label>Фамилия: <input type="text" name="surname"></label>

    <label>Имя: <input type="text" name="name"></label>

    <label>Возраст: <input type="number" name="age"></label>

    <button type="submit">Отправить</button>
  </form>
</body>
</html>