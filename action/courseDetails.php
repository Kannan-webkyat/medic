<?php
include '../_class/dbConfig.php';
$conn = (new dbConfig)->getConnection();

function fetchCourseDetails($conn, $courseId)
{
          $query = "SELECT * FROM courses WHERE id = ?";
          $result = $conn->prepare($query);
          $result->bind_param('i', $courseId);
          $result->execute();
          $data = $result->get_result()->fetch_assoc();
          return $data;
}
