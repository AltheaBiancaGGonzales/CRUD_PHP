<?php
$host = "localhost";
$user = "if0_39055425";
$pass = "a9MqffeYpn8CAG";
$db = "your_database";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
