<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set the response content type to JSON
header("Content-Type: application/json");

// Include the database connection file
include "../../db/db.php";

// Initialize the response array
$response = [];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check the database connection
    if ($conn->connect_error) {
        $response = [
            'success' => false,
            'message' => 'Connection failed: ' . $conn->connect_error
        ];
    } else {
        // Database connection is successful
        // Continue with your data retrieval logic here

        // Fetch all gallery data
        $sql = "SELECT main_gallery_id, main_gallery_name, image FROM tbl_main_gallery WHERE status != 0";
        $result = $conn->query($sql);

        if ($result) {
            $data = [];

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            $response = [
                'success' => true,
                'data' => $data
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Error: ' . $conn->error
            ];
        }
    }
} else {
    $response = [
        'success' => false,
        'message' => 'Invalid request method. Use GET method to fetch data.'
    ];
}

// Close the database connection
$conn->close();

// Send the JSON response
echo json_encode($response);
