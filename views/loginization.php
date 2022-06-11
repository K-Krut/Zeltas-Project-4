<?php
session_start();
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$password1 = filter_var(trim($_POST["password1"]), FILTER_SANITIZE_STRING);


function getConnection(): mysqli
{
    $mysqli = new mysqli('localhost', 'root', '', 'zeltastest');

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}

$password1 = md5($password1."kekus12345");

$connection = getConnection();

$result = $connection->query("SELECT * FROM `users_t` WHERE `email` = '$email' AND `password` = '$password1'");
$user = $result->fetch_assoc();//convert data from request to array

if (count($user) === 0) {
    echo 'user not found';
    exit();
}

setcookie('user', $user['username'], time() + 3600, '/');

$connection->close();

header('Location: /');