<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "../../db/db.php";

    // Check connection
    if ($conn->connect_error) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit();
    }

    // Get data from the FormData object
    $courseId = isset($_POST['course_id']) ? $_POST['course_id'] : null;
    $title = isset($_POST['title']) ? $_POST['title'] : null;
    $description = isset($_POST['description']) ? $_POST['description'] : null;
    $duration = isset($_POST['duration']) ? $_POST['duration'] : null;
    $category = isset($_POST['category']) ? $_POST['category'] : null;

    if ($courseId) {
        // Prepare the SQL statement using a prepared statement
        $sql = "UPDATE course SET category_id = ?, title = ?, description = ?, duration = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute the statement
            $stmt->bind_param("isssi", $category, $title, $description, $duration, $courseId);

            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Data updated successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            $stmt->close();
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    } else {
        $response = array('success' => false, 'message' => 'Course ID not provided in the request.');
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to update data.');
    echo json_encode($response);
}
