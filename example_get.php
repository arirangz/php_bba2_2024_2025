<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Example GET</h1>
</body>
<?php
if (isset($_GET["username"])) {
    echo $_GET["username"];
}

?>

</html>