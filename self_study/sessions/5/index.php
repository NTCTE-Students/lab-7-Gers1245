<?php
session_start();

// Установка времени первого посещения
if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = time();
}

// Обновление времени последнего посещения
$_SESSION['last_visit_time'] = time();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Время посещений</title>
</head>
<body>
    <p>Первое посещение: <?php echo date('Y-m-d H:i:s', $_SESSION['first_visit_time']); ?></p>
    <p>Последнее посещение: <?php echo date('Y-m-d H:i:s', $_SESSION['last_visit_time']); ?></p>
</body>
</html>