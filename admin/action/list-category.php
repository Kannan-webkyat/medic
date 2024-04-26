<?php
header("Content-Type: application/json");

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include "../../db/db.php";

    // Check connection
    if ($conn->connect_error) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit();
    }

    // Perform a SELECT query to fetch data from the "category" table
    $query = "SELECT * FROM category";
    $result = $conn->query($query);

    if ($result) {
        $categories = array();

        while ($row = $result->fetch_assoc()) {
            $categories[] = $row;
        }

        $response = array('success' => true, 'data' => $categories);
    } else {
        $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use GET method to retrieve data.');
    echo json_encode($response);
}
