<?php
$courseFilter = $_GET['courseFilter'] ?? ''; // by default pass empty (in all coures)
$locationFilter = $_GET['locationFilter'] ?? ''; // pass empty for all location

function fetchAllColleges($conn, $courseFilter, $locationFilter)
{
          $where = "";
          $params = array();
          if (!empty($courseFilter)) {
                    $where .= !empty($where) ? " AND c.course_id = ?" : " WHERE c.course_id = ?";
                    $params[] = $courseFilter;
          }

          if (!empty($locationFilter)) {
                    $where .= !empty($where) ? " AND c.loaction_id = ?" : " WHERE c.location_id = ?";
                    $params[] = $locationFilter;
          }

          $query = "SELECT c.*,l.title AS loaction FROM college c JOIN location l ON c.location_id = l.id $where";
          $result = $conn->prepare($query);
          if (!empty($params)) {
                    $result->bind_param(str_repeat('i', count($params)), ...$params);
          }
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);

          //  fetch all college images
          foreach ($data as &$college) {
                    $collegeImages = $conn->prepare("SELECT image FROM college_images WHERE college_id = ?");
                    $collegeImages->bind_param('i', $college['id']);
                    $collegeImages->execute();
                    $collegeImages = $collegeImages->get_result();
                    $college['images'] = $collegeImages->fetch_all(MYSQLI_ASSOC);
          }

          return $data;
}
