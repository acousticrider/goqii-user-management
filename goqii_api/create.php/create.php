<?php
header("Content-Type: application/json");
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$password = password_hash($data['password'], PASSWORD_DEFAULT);
$dob = $data['dob'];

$sql = "INSERT INTO users (name, email, password, dob) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $email, $password, $dob);

if ($stmt->execute()) {
    echo json_encode(["message" => "User added successfully."]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();
?>
