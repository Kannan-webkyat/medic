<?php
function fetchCollegeDetails($conn, $slug)
{
          $query = "SELECT * FROM college WHERE slug = ?";
          $result = $conn->prepare($query);
          $result->bind_param('s', $slug);
          $result->execute();
          $data = $result->get_result()->fetch_assoc();

          // Fetch college images
          $collegeImages = $conn->prepare("SELECT image FROM college_images WHERE college_id = ?");
          $collegeImages->bind_param('i', $data['id']);
          $collegeImages->execute();
          $collegeImages = $collegeImages->get_result();
          $data['images'] = $collegeImages->fetch_all(MYSQLI_ASSOC);

          // college facilities
          $collegeFacilities = $conn->prepare("SELECT f.title AS facility_name,f.image,f.description
          FROM college_facilities cf
          JOIN facility f ON cf.facility_id = f.id
          WHERE college_id = ?");
          $collegeFacilities->bind_param('i', $data['id']);
          $collegeFacilities->execute();
          $collegeFacilities = $collegeFacilities->get_result();
          $data['facilities'] = $collegeFacilities->fetch_all(MYSQLI_ASSOC);

          return $data;
}
