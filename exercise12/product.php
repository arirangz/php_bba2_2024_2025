<?php
require_once "templates/header.php";
require_once "libs/pdo.php";
require_once "libs/product.php";

if (isset($_GET["id"])) {
    $id = (int)$_GET["id"];
    $product = getProductById($pdo, $id);
}
?>

<?php if (isset($product) && $product): ?>
    <h1><?= $product["name"] ?></h1>
    <h2>Price: <?= $product["price"] ?>€</h2>
    <p><?= $product["description"] ?></p>
<?php else: ?>
    <h1>Product not found</h1>
<?php endif; ?>

<?php require_once "templates/footer.php" ?>