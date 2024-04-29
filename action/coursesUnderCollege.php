<?php
function fetchCollegeCourses($conn, $collegeId)
{
          $query = "SELECT c.*,cc.course_id
          FROM college_courses cc
          INNER JOIN courses c ON cc.course_id = c.id
          WHERE cc.college_id = ?";
          $result = $conn->prepare($query);
          $result->bind_param('i', $collegeId);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
