<?php require_once '../main_admin/connect.php';

$product_id = $_GET['id'];
$product_query = mysqli_query($connect, "SELECT * FROM products WHERE id = '$product_id'");
$product = mysqli_fetch_assoc($product_query);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Купить товар</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h3>Купить позицию:"<?= htmlspecialchars($product['name'])?>"</h3>
        <form action="buy_script.php" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
            <div class="input-group">
                <label for="price">Цена:</label>
                <input type="text" id="price" name="price" placeholder="Цена" value="<?= htmlspecialchars($product['price']) ?>" readonly>
            </div>
            <div class="input-group">
                <label for="quantity">Количество:</label>
                <input type="number" id="quantity" name="quantity" placeholder="Количество" value="1" min="1" oninput="updatePrice(this.value, <?= $product['price'] ?>)">
            </div>
            <div class="total-price">
                <strong>Итоговая стоимость: </strong><span id="totalPrice"><?= htmlspecialchars($product['price']) ?></span>
            </div>
            <br>
            <button class="button" type="submit">Купить</button>
        </form>
    </div>

    <script>
        function updatePrice(quantity, price) {
            const totalPrice = quantity * price;
            document.getElementById('totalPrice').innerText = totalPrice;
        }
    </script>
</body>
</html>