<?php
session_start();

// Инициализация корзины
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Добавление товара
if (isset($_GET['add'])) {
    $product = $_GET['add'];
    array_push($_SESSION['cart'], $product);
}

// Удаление товара
if (isset($_GET['remove'])) {
    $index = array_search($_GET['remove'], $_SESSION['cart']);
    if ($index !== false) {
        unset($_SESSION['cart'][$index]);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Корзина</title>
</head>
<body>
    <h2>Добавить товар:</h2>
    <a href="index.php?add=Яблоко">Яблоко</a>
    <a href="index.php?add=Банан">Банан</a>
    <a href="index.php?add=Апельсин">Апельсин</a>

    <h2>Корзина:</h2>
    <?php foreach ($_SESSION['cart'] as $item): ?>
        <p><?php echo $item; ?> <a href="index.php?remove=<?php echo $item; ?>">Удалить</a></p>
    <?php endforeach; ?>
</body>
</html>