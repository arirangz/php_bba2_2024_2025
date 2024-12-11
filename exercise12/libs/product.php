<?php
function getProducts(PDO $pdo): array
{
    $query = $pdo->prepare("SELECT * FROM product");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getProductById(PDO $pdo, int $id): array|bool
{
    $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}
