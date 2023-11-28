<?php

$host = "localhost";
$user = "root";
$password = "";
$database_name = "latihan";
$port = "3306";

// Create connection
$conn = new mysqli($host, $user, $password, $database_name, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();

?>