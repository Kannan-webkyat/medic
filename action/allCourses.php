<?php
function fetchAllCourses(mysqli $conn)
{
          $query = "SELECT * FROM course";
          $result = $conn->prepare($query);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
