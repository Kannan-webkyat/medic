<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include "../../db/db.php";

    // Check connection
    if ($conn->connect_error) {
        $response = array('success' => false, 'message' => 'Connection failed: ' . $conn->connect_error);
        echo json_encode($response);
        exit();
    }

    if (isset($_GET['id'])) {
        // Fetch a specific course by ID
        $courseId = $_GET['id'];

        // SQL query to fetch a course by ID
        $sql = "SELECT * FROM course WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind the parameter
            $stmt->bind_param("i", $courseId);

            if ($stmt->execute()) {
                $result = $stmt->get_result();
                $course = $result->fetch_assoc();
                $response = array('success' => true, 'course' => $course);
            } else {
                $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
            }

            $stmt->close();
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    } else {
        // Fetch all courses
        $sql = "SELECT * FROM course";
        $result = $conn->query($sql);

        if ($result) {
            $courses = array();

            while ($row = $result->fetch_assoc()) {
                $courses[] = $row;
            }

            $response = array('success' => true, 'courses' => $courses);
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
        }
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use GET method to fetch courses.');
    echo json_encode($response);
}
