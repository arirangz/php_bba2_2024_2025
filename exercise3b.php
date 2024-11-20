<?php
$game_name = "Dragon Ball: Sparking! Zero";
$is_new = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $game_name ?>
        <?php if ($is_new === true) { ?>
            <strong>NEW!</strong>
        <?php } ?>
    </p>
</body>

</html>