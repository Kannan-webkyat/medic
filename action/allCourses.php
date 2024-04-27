<?php
include '../_class/dbConfig.php';
$conn = (new dbConfig)->getConnection();

function fetchAllCourses($conn)
{
          $query = "SELECT * FROM courses";
          $result = $conn->prepare($query);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
