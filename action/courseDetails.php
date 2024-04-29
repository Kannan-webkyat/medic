<?php
function fetchCourseDetails(mysqli $conn, string $slug)
{
          $query = "SELECT * FROM course WHERE slug = ?";
          $result = $conn->prepare($query);
          $result->bind_param('s', $slug);
          $result->execute();
          $data = $result->get_result()->fetch_assoc();
          return $data;
}
