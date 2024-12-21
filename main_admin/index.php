<?php

require_once 'connect.php';


 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продуктовый магазин(ADMIN)</title>
    <link rel="stylesheet" href="style.css" >
    
</head>
<body>

    <header>
        <h1>Продуктовый магазин(ADMIN)</h1>
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
            <a href="update.php?id=<?= $product['id'] ?>"><button class = "updates">Изменить</button></a>
            <a  href="delete.php?id=<?= $product['id'] ?>"><button class = "deletes">Удалить</button></a>
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

    <div class = "div-form">
       <form action="create.php" method="post" class = "product-form">
        <input type="text" name="name" placeholder="Название товара"  required>
        <input type="text" name="price" placeholder="Цена"  required>
        <input type="text" name="quantity" placeholder="Количество"  required>
        <button class = "updates" type="submit">Добавить</button>

    </form> 
    </div>

    

    </main>

    <footer>
        <p>&copy; 2024 Продуктовый магазин. Все права защищены.</p>
    </footer>

</body>
</html>
