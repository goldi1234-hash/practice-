<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_php_db";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection Failed: " . mysqli_connect_error());
}

?>