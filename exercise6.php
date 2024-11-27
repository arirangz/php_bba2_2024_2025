<?php

function displayFullName(string $first_name, string $last_name): void
{
    echo "<h2>$first_name $last_name";
}

$first_name = "John";
$last_name = "Doe";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php displayFullName($first_name, $last_name); ?>

</body>

</html>