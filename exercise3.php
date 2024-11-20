<?php
$user_name = "test123";
$age = 20;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php
        if ($age < 18) {
            echo "Our game in not suitable for players under the age of 18";
        } else {
            echo "Welcome to our website $user_name";
        }
        ?>
    </p>
    <?php if ($age < 18) { ?>
        <p class="important">Our game in not suitable for players under the age of 18</p>
    <?php } else { ?>
        <h2><?= "Welcome to our website $user_name" ?></h2>
    <?php } ?>
</body>

</html>