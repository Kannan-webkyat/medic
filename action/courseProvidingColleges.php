<?php
include '../_class/dbConfig.php';
$conn = (new dbConfig)->getConnection();

function fetchCollegesUnderCourse($conn, $courseId)
{
          $query = "SELECT *
          FROM college
          WHERE course_id = ?";
          $result = $conn->prepare($query);
          $result->bind_param('i', $courseId);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
