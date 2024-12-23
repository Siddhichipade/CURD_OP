<?php
$conn = new mysqli("localhost", "root", "", "crud_project");
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $conn->query("DELETE FROM users WHERE id=$id");
    echo json_encode(["message" => "User deleted successfully"]);
}
?>
