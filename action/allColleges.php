<?php
// Function to prepare and execute SQL
function prepareAndExecute($conn, $sql, $type, $param)
{
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($type, $param);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    if ($result) {
        return $result['id'];
    }
}

function fetchAllColleges($conn, $course, $location, $recommended)
{
    $where = " WHERE 1=1 ";
    $types = null;
    // Assign filters based on type
    if (!empty($location)) {
        $locationId = prepareAndExecute($conn, "SELECT id FROM location WHERE slug = ?", 's', $location);
        $where      .= " AND c.location_id = ?";
        $params[]   = $locationId;
        $types      .= 'i';
    }

    if (!empty($course)) {
        $courseId = prepareAndExecute($conn, "SELECT id FROM course WHERE slug = ?", 's', $course);
        $where    .= " AND cc.course_id = ?";
        $params[] = $courseId;
        $types    .= 'i';
    }

    if (!empty($recommended) && $recommended === 'true') {
        $where    .= " AND c.featured = ?";
        $params[] = 1;
        $types    .= 'i';
    }

    $query = "SELECT c.*, l.title AS `location`, GROUP_CONCAT(DISTINCT course.title) AS course_names
          FROM college c 
          JOIN `location` l ON c.location_id = l.id 
          JOIN college_courses cc ON c.id = cc.college_id
          JOIN course ON course.id = cc.course_id
          $where
          GROUP BY c.id";

    $stmt = $conn->prepare($query);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    // Fetch all college images
    foreach ($data as &$college) {
        $collegeImages = $conn->prepare("SELECT image FROM college_images WHERE college_id = ?");
        $collegeImages->bind_param('i', $college['id']);
        $collegeImages->execute();
        $college['images'] = $collegeImages->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    return $data;
}