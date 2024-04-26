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

    // Get the category ID to delete from the POST data
   // Get the raw JSON data from the request
   $json_data = file_get_contents("php://input");
   $data = json_decode($json_data, true);
   print_r $data;
   exit;

    if ($categoryID) {
        // SQL query to delete the category from the category table
        $sql = "DELETE FROM category WHERE id = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the parameter
            $stmt->bind_param("i", $categoryID);

            // Execute the statement
            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Category deleted successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            // Close the statement
            $stmt->close();
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('success' => false, 'message' => 'Category ID not provided in the request.');
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to delete a category.');
    echo json_encode($response);
}
