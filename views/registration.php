<?php
session_start();
$username = filter_var(trim($_POST["username"]), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$password1 = filter_var(trim($_POST["password1"]), FILTER_SANITIZE_STRING);
$password2 = filter_var(trim($_POST["password2"]), FILTER_SANITIZE_STRING);

$dataArray = array($username, $email, $password1, $password2);


function checkDataFilled($data): bool
{
    return in_array("", $data);

}

function checkPassword($pass1, $pass2): bool
{
    return $pass1 === $pass2;
}

function checkElementCorrection($data): bool
{
    return mb_strlen($data) < 5 || mb_strlen($data) > 90;
}

function getConnection(): mysqli
{
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'zeltas');

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    return $mysqli;
}

if (!checkDataFilled($dataArray)) {
    echo "fill all fields";
}

if (checkElementCorrection($username)) {
    echo "username `" . $username . "` isn`t correct\n";
} else if (checkElementCorrection($email)) {
    echo "email `" . $email . "` isn`t correct\n";
} else if (!checkPassword($password1, $password2)) {
    echo "passwords are not the same\n";
}

$password1 = md5($password1."kekus12345");
$connection = new mysqli('localhost', 'root', '', 'zeltastest');

$connection->query("INSERT INTO `users_t` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password1')");

$connection->close();

header('Location: /');