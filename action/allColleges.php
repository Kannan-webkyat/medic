<?php
function fetchAllColleges($conn, $filter1, $filter2)
{
          $courseFilter = '';
          $locationFilter = '';

          // Function to parse filter
          function parseFilter($filter)
          {
                    if (!empty($filter)) {
                              list($type, $value) = explode(':', $filter);
                              return [$type, $value];
                    }
                    return [null, null];
          }

          // Parse both filters
          list($type1, $value1) = parseFilter($filter1);
          list($type2, $value2) = parseFilter($filter2);

          // Assign filters based on type
          if ($type1 === 'location') {
                    $locationFilter = $value1;
          } elseif ($type1 === 'course') {
                    $courseFilter = $value1;
          }

          if ($type2 === 'location') {
                    $locationFilter = $value2;
          } elseif ($type2 === 'course') {
                    $courseFilter = $value2;
          }

          $where = "";
          $params = [];
          $types = "";

          // Helper function to prepare and execute SQL
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

          if (!empty($courseFilter)) {
                    $courseFilter = prepareAndExecute($conn, "SELECT id FROM course WHERE slug = ?", 's', $courseFilter);
                    $where .= !empty($where) ? " AND cc.course_id = ?" : " WHERE cc.course_id = ?";
                    $params[] = $courseFilter;
                    $types .= 'i';
          }

          if (!empty($locationFilter)) {
                    $locationFilter = prepareAndExecute($conn, "SELECT id FROM location WHERE slug = ?", 's', $locationFilter);
                    $where .= !empty($where) ? " AND c.location_id = ?" : " WHERE c.location_id = ?";
                    $params[] = $locationFilter;
                    $types .= 'i';
          }

          $query = "SELECT DISTINCT c.*, l.title AS `location` 
                    FROM college c 
                    JOIN `location` l ON c.location_id = l.id 
                    JOIN college_courses cc ON c.id = cc.college_id
                    $where";
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
