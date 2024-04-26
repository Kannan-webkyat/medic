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

    // Get the updated category data from the FormData
    $categoryId = $_POST['id'];
    $updatedCategoryName = $_POST['category'];

    if (!empty($categoryId) && !empty($updatedCategoryName)) {
        // SQL query to update the category in the category table
        $sql = "UPDATE category SET category = ? WHERE id = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the parameters
            $stmt->bind_param("si", $updatedCategoryName, $categoryId);

            // Execute the statement
            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Category updated successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            // Close the statement
            $stmt->close();
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('success' => false, 'message' => 'Category ID or data not provided in the request.');
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to update data.');
    echo json_encode($response);
}
