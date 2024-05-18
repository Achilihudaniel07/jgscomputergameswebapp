<?php



// Database configuration parameters
$host = "localhost";
$username = "root";
$password = "";
$dbname = "jeffreygbemudu_sql";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check database connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character set to UTF-8
mysqli_set_charset($conn, "utf8");
session_start()



?>