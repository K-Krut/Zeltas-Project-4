<?php

const SERVERNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DBNAME = "zeltas";

function connect($servername, $username, $password, $dbname): mysqli
{
    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}

$db = connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);