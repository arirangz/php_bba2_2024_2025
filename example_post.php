<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["username"])) {
        echo "Welcome {$_POST["username"]}";
    }
    ?>
    <form action="" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <input type="submit" value="Send">
    </form>
</body>

</html>