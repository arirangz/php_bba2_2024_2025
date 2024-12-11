<?php
require_once "templates/header.php";
require_once "libs/pdo.php";
require_once "libs/product.php";

$products = getProducts($pdo);

?>
<h1>Home</h1>
<h2>Products</h2>
<?php foreach ($products as $product): ?>
    <article>
        <h2><?= $product["name"]; ?></h2>
        <p>Price: <strong><?= $product["price"] ?>€</strong></p>
        <p><a href="product.php?id=<?= $product["id"] ?>">Read More</a></p>
    </article>
<?php endforeach; ?>

<?php require_once "templates/footer.php" ?>