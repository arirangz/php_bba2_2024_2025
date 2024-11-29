<?php

declare(strict_types=1);

$games = [
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "Animal crossing", "minimumAge" => 3],
    ["name" => "PUBG", "minimumAge" => 13]
];

function checkGameAge(int $gameAge, int $userAge): bool
{
    return $userAge >= $gameAge;
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
    <form action="" method="post">
        <p>
            <label for="age">Enter your age</label>
            <input type="number" name="age" id="age">
        </p>
        <input type="submit" value="Send">
    </form>
    <?php if (isset($_POST["age"])): ?>
        <?php foreach ($games as $game): ?>
            <?php if (checkGameAge($game["minimumAge"], (int)$_POST["age"])): ?>
                <h2><?= $game["name"] ?>: You are allowed</h2>
            <?php else: ?>
                <h2><?= $game["name"] ?>: You are not allowed</h2>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>