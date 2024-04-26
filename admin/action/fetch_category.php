<?php
header("Content-Type: application/json");

include "../../db/db.php";

// Check connection
if ($conn->connect_error) {
    $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
    echo json_encode($response);
    exit();
}

// Get the category ID from the request (assuming it's sent as a GET parameter)
$categoryID = isset($_GET['id']) ? $_GET['id'] : null;

if ($categoryID) {
    // Fetch data from the category table for the specified category ID
    $data = array();
    $query = "SELECT * FROM category WHERE id = ?";
    
    // Prepare the statement
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $categoryID);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $response = array('success' => true, 'data' => $data);
    } else {
        $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
    }

    // Close the statement
    $stmt->close();
} else {
    $response = array('success' => false, 'message' => 'Category ID not provided in the request.');
}

// Close the database connection
$conn->close();

echo json_encode($response);
