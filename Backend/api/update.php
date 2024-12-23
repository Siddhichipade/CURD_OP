<?php
$conn = new mysqli("localhost", "root", "", "crud_project");
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $age = $data['age'];
    $conn->query("UPDATE users SET name='$name', email='$email', age=$age WHERE id=$id");
    echo json_encode(["message" => "User updated successfully"]);
}
?>
