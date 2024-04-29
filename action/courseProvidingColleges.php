<?php
function fetchCollegesUnderCourse(mysqli $conn, $slug)
{
          $query = "SELECT * FROM college WHERE slug = ?";
          $result = $conn->prepare($query);
          $result->bind_param('s', $slug);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
