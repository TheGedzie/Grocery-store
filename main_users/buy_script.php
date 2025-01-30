<?php
require_once '../main_admin/connect.php';

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$product_query = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$id'");
$product = mysqli_fetch_assoc($product_query);

if ($product['quantity'] >= $quantity) {
    $new_quantity = $product['quantity'] - $quantity;
    mysqli_query($connect, "UPDATE `products` SET `quantity` = '$new_quantity' WHERE `id` = '$id'");
}

header('Location: index.php');
exit();
?>
