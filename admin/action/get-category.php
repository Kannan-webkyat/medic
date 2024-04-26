<?php
header("Content-Type: application/json");

include "../../db/db.php";

// Check connection
if ($conn->connect_error) {
    $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
    echo json_encode($response);
    exit();
}

// Fetch data from the category table
$data = array();
$query = "SELECT * FROM category";
$result = $conn->query($query);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $response = array('success' => true, 'data' => $data);
} else {
    $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
}

// Close the database connection
$conn->close();

echo json_encode($response);
