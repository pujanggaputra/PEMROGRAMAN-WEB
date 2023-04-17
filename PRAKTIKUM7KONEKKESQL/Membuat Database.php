<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername,$username, $password);
// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Creat database
$sql ="CREATE DATABASE test_db";
if(mysqli_query($conn, $sql)) {
    echo "Database Create successfully";
} else {
    echo "Error Creating Database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>