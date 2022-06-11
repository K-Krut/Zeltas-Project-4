<?php
session_start();
$username = $_POST["username"];
$email = $_POST["email"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

if (in_array("", array(trim($username), trim($email), trim($password1), trim($password2))))
    echo "fill all fields" ;

$_SESSION["user"] = md5($username.$email);

setcookie("session_id", session_id(), time() + 360);

header('Location: '."/");