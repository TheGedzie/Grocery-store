<?php

require_once 'connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h3 {
            color: #333;
            text-align: center;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .button {
            background-color: #4CAF50; /* Зеленый цвет */
            color: white; /* Белый текст */
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            width: 100%;
        }

        .button:hover {
            background-color: #45a049; /* Темнее зеленый при наведении */
        }
    </style>
</head>
<body>
	<h3>Изменить товар</h3>
 <form action="update_processing.php" method="post">
 	<input type="hidden" name="id" value = "<?= $product['id'] ?>"  >
        <input type="text" name="name" placeholder="name" value="<?= $product['name'] ?>"  >
        <input type="text" name="price" placeholder="price" value = "<?= $product['price'] ?>"  >
        <input type="text" name="quantity" placeholder="quantity" value = "<?= $product['quantity'] ?>"> <br><br>
        <button class = "button" type="submit">Изменить</button>

    </form>
</body>
</html>