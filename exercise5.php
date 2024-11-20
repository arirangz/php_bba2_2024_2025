<?php

$games = [
    ["name" => "Clash Royal", "editor" => "Supercell", "type" => "TD"],
    ["name" => "Clash of Clans", "editor" => "Supercell", "type" => "Strategy"],
    ["name" => "Genshin Impact", "editor" => "MiHiYo", "type" => "MMORPG"],

]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($games as $game) { ?>
            <li><?= "Name: {$game["name"]}, Editor: {$game["editor"]}, Type: {$game["type"]}  " ?></li>
        <?php } ?>
    </ul>
</body>

</html>