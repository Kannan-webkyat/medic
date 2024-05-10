<?php
// Function to parse filter
function parseFilter($filter)
{
    if (!empty($filter)) {
        list($type, $value) = explode(':', $filter);
        return [$type, $value];
    }
    return [null, null];
}

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

function fetchAllColleges($conn, $filter1, $filter2)
{
    // Parse both filters
    list($type1, $value1) = parseFilter($filter1);
    list($type2, $value2) = parseFilter($filter2);

    $params = [];
    $types  = "";
    $where  = " WHERE 1=1"; // Start with a true condition

    // Assign filters based on type
    if ($type1 === 'location' && !empty($value1)) {
        $locationId = prepareAndExecute($conn, "SELECT id FROM location WHERE slug = ?", 's', $value1);
        $where      .= " AND c.location_id = ?";
        $params[]   = $locationId;
        $types      .= 'i';
    } elseif ($type1 === 'course' && !empty($value1)) {
        $courseId = prepareAndExecute($conn, "SELECT id FROM course WHERE slug = ?", 's', $value1);
        $where    .= " AND cc.course_id = ?";
        $params[] = $courseId;
        $types    .= 'i';
    }

    if ($type2 === 'location' && !empty($value2)) {
        $locationId = prepareAndExecute($conn, "SELECT id FROM location WHERE slug = ?", 's', $value2);
        $where      .= " AND c.location_id = ?";
        $params[]   = $locationId;
        $types      .= 'i';
    } elseif ($type2 === 'course' && !empty($value2)) {
        $courseId = prepareAndExecute($conn, "SELECT id FROM course WHERE slug = ?", 's', $value2);
        $where    .= " AND cc.course_id = ?";
        $params[] = $courseId;
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

?>
