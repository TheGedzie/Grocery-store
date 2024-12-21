<?php

require_once 'connect.php';

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];


$query = "INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES (NULL, '$name', '$price', '$quantity')";
$result = mysqli_query($connect, $query);

if ($result) {
    echo "Product added successfully!";
} else {
    echo "Error: " . mysqli_error($connect);
}

header('Location:index.php');


?>
