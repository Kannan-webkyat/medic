<?php
function fetchCollegeCourses($conn, $slug)
{
          $query = "SELECT c.*,cc.course_id
          FROM college_courses cc
          JOIN course c ON cc.course_id = c.id
          WHERE cc.college_id = (SELECT id FROM college WHERE slug = ?)";
          $result = $conn->prepare($query);
          $result->bind_param('s', $slug);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
