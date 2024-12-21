<?php
require_once '../main_admin/connect.php';

$id = $_POST['id'];
$quantity = $_POST['quantity'];

// Получаем текущие данные о товаре
$product_query = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product_query);

// Проверяем, достаточно ли товара в наличии
if ($product['quantity'] >= $quantity) {
    // Обновляем количество товара
    $new_quantity = $product['quantity'] - $quantity;
    mysqli_query($connect, "UPDATE `products` SET `quantity` = '$new_quantity' WHERE `id` = '$id'");
}

// Перенаправляем пользователя обратно на страницу товаров
header('Location: index.php');
exit();
?>
