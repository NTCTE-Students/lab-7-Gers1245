<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: welcome.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
</head>
<body>
    <form method="POST">
        Имя: <input type="text" name="username"><br>
        Пароль: <input type="password" name="password"><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>