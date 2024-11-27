<?php

$games = [
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "Animal crossing", "minimumAge" => 3],
    ["name" => "PUBG", "minimumAge" => 13]
];

function checkGameAge(int $gameAge, int $userAge): bool
{
    return $userAge >= $gameAge;
}

$age = 5;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($games as $game): ?>
        <?php if (checkGameAge($game["minimumAge"], $age)): ?>
            <h2><?= $game["name"] ?>: You are allowed</h2>
        <?php else: ?>
            <h2><?= $game["name"] ?>: You are not allowed</h2>
        <?php endif; ?>
    <?php endforeach; ?>
</body>

</html>