<?php

function verifyLogin(string $email, string $password): bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        return true;
    } else {
        return false;
    }
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
    <h1>Login</h1>
    <form action="" method="post">
        <p>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <input type="submit" value="Login">
    </form>
    <?php if (isset($_POST["email"]) && isset($_POST["password"])): ?>
        <?php if (verifyLogin($_POST["email"], $_POST["password"])): ?>
            <p>You are allowed</p>
        <?php else: ?>
            <p>You are not allowed</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>