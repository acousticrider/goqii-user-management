<?php
header("Content-Type: application/json");
include 'db.php';

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$email = $data['email'];
$dob = $data['dob'];

$sql = "UPDATE users SET name=?, email=?, dob=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssi", $name, $email, $dob, $id);

if ($stmt->execute()) {
    echo json_encode(["message" => "User updated successfully."]);
} else {
    echo json_encode(["error" => $conn->error]);
}

$conn->close();
?>
