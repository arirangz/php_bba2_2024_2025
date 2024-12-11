<?php

$pdo = new PDO('mysql:dbname=keyce_test;host=localhost;charset=utf8mb4', 'root', '');
$id = $_GET['id'];


$query = $pdo->query("SELECT * FROM users WHERE id = $id");
$result = $query->fetch(PDO::FETCH_ASSOC);
var_dump($result);

/*
$query = $pdo->prepare("SELECT * FROM users WHERE id = :user_id");
$query->bindValue(':user_id', $id, PDO::PARAM_INT);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);
var_dump($user);
*/
