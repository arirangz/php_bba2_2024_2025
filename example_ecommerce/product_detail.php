<?php
require_once "lib/product.php";

if (isset($_GET["index"])) {
    $product = getProductByIndex($_GET["index"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($product) && $product): ?>
        <h1><?= $product["name"] ?></h1>
        <h2><?= $product["price"] ?></h2>
        <p><?= $product["description"] ?></p>
    <?php else: ?>
        <h1>Product not found</h1>
    <?php endif; ?>
    <a href="index.php">Return to list</a>
</body>

</html>