<?php
function hasMajority(int $age): bool
{
    /*
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
    */
    // a different way to do it:
    return $age >= 18;
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
    <h1>Game access:</h1>
    <?php if (hasMajority(20)): ?>
        <h2>You are allowed to play this game</h2>
    <?php else: ?>
        <h2>You are not allowed to play this game</h2>
    <?php endif; ?>
</body>

</html>