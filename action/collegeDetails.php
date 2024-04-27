<?php
include '../_class/dbConfig.php';
$conn = (new dbConfig)->getConnection();

function fetchCollegeDetails($conn, $collegeId)
{
          $query = "SELECT * FROM colleges WHERE id = ?";
          $result = $conn->prepare($query);
          $result->bind_param('i', $collegeId);
          $result->execute();
          $data = $result->get_result()->fetch_assoc();

          // Fetch college images
          $collegeImages = $conn->prepare("SELECT image FROM college_images WHERE college_id = ?");
          $collegeImages->bind_param('i', $collegeId);
          $collegeImages->execute();
          $collegeImages = $collegeImages->get_result();
          $data['images'] = $collegeImages->fetch_all(MYSQLI_ASSOC);

          return $data;
}
