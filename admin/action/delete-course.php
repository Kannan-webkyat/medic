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

    // Get the course ID to delete from the POST data
    $courseID = isset($_POST['course_id']) ? $_POST['course_id'] : null;

    if ($courseID) {
        // Prepare the SQL statement to delete the course
        $sql = "DELETE FROM course WHERE id = ?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the parameter
            $stmt->bind_param("i", $courseID);

            // Execute the statement
            if ($stmt->execute()) {
                $response = array('success' => true, 'message' => 'Course deleted successfully.');
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            // Close the statement
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
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to delete a course.');
    echo json_encode($response);
}
