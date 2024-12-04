<?php

require_once "templates/header.php";
require_once "libs/game.php";

$games = getGames();

?>

<h1>Games list</h1>

<section>
    <?php foreach ($games as $index => $game): ?>
        <?php require "templates/game_template.php" ?>
    <?php endforeach; ?>

</section>

<?php require_once "templates/footer.php" ?>