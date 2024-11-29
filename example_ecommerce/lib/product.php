<?php


function getProducts(): array
{
    $products = [
        ["name" => "Dell Laptop", "price" => 1200, "description" => "Description of the Dell latop"],
        ["name" => "Asus Laptop", "price" => 1500, "description" => "Description of the Dell latop"],
        ["name" => "Acer Laptop", "price" => 1100, "description" => "Description of the Dell latop"],
        ["name" => "Lenovo Laptop", "price" => 600, "description" => "Description of the Dell latop"],
    ];
    return $products;
}


function getProductByIndex(int $index): array|bool
{
    $products = getProducts();

    if (isset($products[$index])) {
        return $products[$index];
    }
    return false;
}
