<?php
$conn = new mysqli("localhost", "root", "", "crud_project");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $name = $data['name'];
    $email = $data['email'];
    $age = $data['age'];
    $conn->query("INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)");
    echo json_encode(["message" => "User created successfully"]);
}
?>
