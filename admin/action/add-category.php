<?php
header("Content-Type: application/json");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../../db/db.php";

    // Check connection
    if ($conn->connect_error) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit();
    }

    // Get the category from the FormData
    $categoryName = $_POST['category'];

    if (!empty($categoryName)) {
        // SQL query to insert data into the category table
        $sql = "INSERT INTO category (category) VALUES (?)";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the parameter
            $stmt->bind_param("s", $categoryName);

            // Execute the statement
            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Data inserted successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            // Close the statement
            $stmt->close();
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('success' => false, 'message' => 'Category data not provided in the request.');
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to insert data.');
    echo json_encode($response);
}
