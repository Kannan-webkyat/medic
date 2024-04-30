<?php
function fetchAllCourseCollections($conn)
{
          $query = "SELECT * FROM course_collections";
          $result = $conn->prepare($query);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);

          // course collection courses
          foreach ($data as &$courseCollection) {
                    $courseCollectionCourses = $conn->prepare("SELECT c.*,ccc.course_id
                    FROM course_collection_courses ccc 
                    INNER JOIN courses c ON ccc.course_id = c.id
                    WHERE course_collection_id = ?");
                    $courseCollectionCourses->bind_param('i', $courseCollection['id']);
                    $courseCollectionCourses->execute();
                    $courseCollectionCourses = $courseCollectionCourses->get_result();
                    $courseDatas = $courseCollectionCourses->fetch_all(MYSQLI_ASSOC);
                    $courseCollection['courses'] = $courseDatas;
          }

          return $data;
}
