<?php
$host = "localhost";
$username = "employees";
$password = "";
$database = "xproject";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
