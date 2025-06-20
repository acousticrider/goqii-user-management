<?php
header("Content-Type: application/json");

// Only allow POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    echo json_encode(["error" => "Forbidden method"]);
    exit;
}

// Read JSON body
$data = json_decode(file_get_contents("php://input"), true);

// Just return the data
echo json_encode([
    "message" => "User added successfully.",
    "data" => $data
]);
