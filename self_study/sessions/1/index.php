<?php
session_start();

// Устанавливаем переменную сессии
$_SESSION['username'] = 'student';

// Проверяем и выводим значение
if (isset($_SESSION['username'])) {
    echo "Значение переменной username: " . $_SESSION['username'];
} else {
    echo "Переменная username не установлена";
}
?>