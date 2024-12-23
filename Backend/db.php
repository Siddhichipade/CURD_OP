<?php
$conn = new mysqli("localhost", "root", "", "npm ");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
