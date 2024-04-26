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
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $category = $_POST['category'];
    

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO course (category_id, title, description, duration) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
       
        // Bind parameters and execute the statement
        $stmt->bind_param("isss", $category, $title, $description, $duration);
       
        if ($stmt->execute()) {
            $response = array('success' => true, 'message' => 'Data inserted successfully.');
        } else {
            $response = array('success' => false, 'message' => 'Error: ' . $stmt->error);
        }
       

        $stmt->close();
    } else {
        $response = array('success' => false, 'message' => 'Error: ' . $conn->error);
    }

    // Close the database connection
    $conn->close();

    echo json_encode($response);
} else {
    $response = array('success' => false, 'message' => 'Invalid request method. Use POST method to insert data.');
    echo json_encode($response);
}
