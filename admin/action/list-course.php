<?php
header("Content-Type: application/json");

include "../../db/db.php";

// Check connection
if ($conn->connect_error) {
    $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
    echo json_encode($response);
    exit();
}

// Perform a SELECT query to fetch data from the "course" table
$query = "SELECT * FROM course";
$result = $conn->query($query);

if ($result) {
    $courses = array();

    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }

    $response = array('success' => true, 'data' => $courses);
} else {
    $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
}

// Close the database connection
$conn->close();

echo json_encode($response);
