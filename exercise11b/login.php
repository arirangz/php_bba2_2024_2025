<?php
session_start();
function loginUser(string $email, string $password): bool
{
    if ($email === "test@gmail.com" && $password === "ABC123") {
        session_regenerate_id(true);
        $_SESSION["email"] = $email;
        return true;
    } else {
        return false;
    }
}
if (isset($_POST["email"])) {

    $result = loginUser($_POST["email"], $_POST["password"]);
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
    <?php if (isset($_SESSION["email"])): ?>
        <p>Connected user: <?= $_SESSION["email"] ?> <a href="logout.php">Logout</a></p>
    <?php endif; ?>


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
        <?php if (!$result): ?>
            <p>Invalid email user or password</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>