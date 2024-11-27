<?php

$students = [
    ["name" => "John", "value" => 72],
    ["name" => "Jane", "value" => 95],
    ["name" => "Mark", "value" => 85],
];

$cities = [
    ["name" => "Paris", "value" => 7],
    ["name" => "Tokyo", "value" => 8],
    ["name" => "Barcelona", "value" => 15],
    ["name" => "London", "value" => 4],
];


function getMax(array $list): array
{
    $max = $list[0];
    foreach ($list as $item) {
        if ($item["value"] > $max["value"]) {
            $max = $item;
        }
    }
    return $max;
}

function getMin(array $list): array
{
    $min = $list[0];
    foreach ($list as $item) {
        if ($item["value"] < $min["value"]) {
            $min = $item;
        }
    }
    return $min;
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
    <h1>Max</h1>
    <h2>Max student</h2>
    <?php $bestStudent = getMax($students); ?>
    <p>The best student is <?= $bestStudent["name"] ?> with a mark of <?= $bestStudent["value"] ?></p>

    <?php $lowStudent = getMin($students); ?>
    <p>The lowest student is <?= $lowStudent["name"] ?> with a mark of <?= $lowStudent["value"] ?></p>

    <h2>Max city</h2>
    <?php $bestCity = getMax($cities); ?>
    <p>The hottest city is <?= $bestCity["name"] ?> with a temperature of <?= $bestCity["value"] ?>°</p>
    <?php $coldCity = getMin($cities); ?>
    <p>The coldest city is <?= $coldCity["name"] ?> with a temperature of <?= $coldCity["value"] ?>°</p>


</body>

</html>