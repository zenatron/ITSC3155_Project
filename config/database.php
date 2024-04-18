<?php
// Database configuration settings
$host = 'localhost';         // Database host
$db_user = 'root';           // Database username
$db_password = 'password';   // Database password
$db_name = 'logindb';      // Database name

// Create a new database connection
$conn = new mysqli($host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// The connection is successful if no error is triggered
?>