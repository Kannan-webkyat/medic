<?php
function fetchCollegesOfferingCourse(mysqli $connection, $courseSlug)
{
          $courseIdQuery = "SELECT id FROM course WHERE slug = ?";
          $courseIdStmt = $connection->prepare($courseIdQuery);
          $courseIdStmt->bind_param('s', $courseSlug);
          $courseIdStmt->execute();
          $courseResult = $courseIdStmt->get_result()->fetch_assoc();
          $courseId = $courseResult['id'];

          $collegesQuery = "SELECT c.title AS college_name,c.slug,l.title AS `location`,c.id
                    FROM college_courses cc 
                    JOIN college c ON cc.college_id = c.id 
                    JOIN `location` l ON c.location_id = l.id
                    WHERE cc.course_id = ?";
          $collegesStmt = $connection->prepare($collegesQuery);
          $collegesStmt->bind_param('i', $courseId);
          $collegesStmt->execute();
          $collegesData = $collegesStmt->get_result()->fetch_all(MYSQLI_ASSOC);

          // college images
          foreach ($collegesData as $key => $college) {
                    $imageQuery = "SELECT image FROM college_images WHERE college_id = ?";
                    $imageStmt = $connection->prepare($imageQuery);
                    $imageStmt->bind_param('i', $college['id']);
                    $imageStmt->execute();
                    $imageResult = $imageStmt->get_result()->fetch_assoc();
                    $collegesData[$key]['image'] = $imageResult['image'] ?? 'default_college_image.png';
          }
          return $collegesData;
}
