<?php require_once "lib/product.php";

$products = getProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>

        <?php foreach ($products as $index => $product): ?>
            <article>
                <h2><?= $product["name"] ?></h2>
                <h3>Price: <?= $product["price"] ?></h3>
                <a href="product_detail.php?index=<?= $index ?>">Read More</a>
            </article>
        <?php endforeach; ?>
    </section>
</body>

</html>