<?php

require_once '../main_admin/connect.php';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Продуктовый магазин</title>
 	<link rel="stylesheet" type="text/css" href="main.css">
 	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
 <body>
  <header>
        <h1>Продуктовый магазин</h1>
    </header>

    <main>
            <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Название товара</th>
                <th>Стоимость</th>
                <th>Количество</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
             $query = "SELECT * FROM `products`";
$result = mysqli_query($connect, $query);

// Проверка на наличие результатов
if ($result) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC); // Получаем все данные в виде ассоциативного массива
    foreach ($products as $product) {
        ?>
        <tr>
           <td><?= $product['id'] ?></td>
           <td><?= $product['name'] ?></td>
           <td><?= $product['price'] ?></td>
           <td><?= $product['quantity'] ?></td>
           <td>
            <a href="buy.php?id=<?= $product['id'] ?>"><button class = "button"><i class='bx bx-cart' style="width:40px"></i></button></a>
        </td>

        </tr>
        <?php
    }
} else {
    echo "Ошибка выполнения запроса: " . mysqli_error($connect);
}

?>
        </tbody>
    </table>

    <br>
    <br>



    </main>

    <footer style="margin-top:20%;">
        <p>&copy; 2024 Продуктовый магазин. Все права защищены.</p>
    </footer>
 </body>
 </html>


