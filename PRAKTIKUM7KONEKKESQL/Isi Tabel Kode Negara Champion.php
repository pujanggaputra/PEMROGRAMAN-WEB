<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";


// Create connection
$conn = mysqli_connect($servername,$username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Eng', 'ENGLISH', '3')";


if (mysqli_query($conn, $sql)) {
    echo "New Record Create Successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>