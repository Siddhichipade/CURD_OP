<?php
$conn = new mysqli("localhost", "root", "", "crud_project");
$result = $conn->query("SELECT * FROM users");
$users = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($users);
?>
