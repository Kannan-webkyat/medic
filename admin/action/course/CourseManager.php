<?php
class CourseManager
{
          private mysqli $conn;

          public function __construct($db)
          {
                    $this->conn = $db;
          }

          public function add($data)
          {
                    include './action/modules/documentUploader.php';
                    $currentDateTime = date('Y-m-d H:i:s');

                    $image = '';
                    if (isset($data['bannerImage'])) {
                              $uploader = new DocumentUploader();
                              $path = __DIR__ . '/docs/';
                              $image    = $uploader->uploadDocument($data['bannerImage'], $path);
                    }

                    $query = "INSERT INTO course (category_id,title,duration,eligibility,minimum_age,minimum_percentage,about,job_opportunity,banner_image,created_at) VALUES (?,?,?,?,?,?,?,?,?,?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('isssssssss', $data['categoryId'], $data['title'], $data['duration'], $data['elegibitliy'], $data['minimumAge'], $data['minimumPercentage'], $data['about'], $data['jobOpertunity'], $image, $currentDateTime);
                    return $sql->execute();
          }

          public function edit($data)
          {
                    include './action/modules/documentUploader.php';
                    $image = '';
                    if (isset($data['image'])) {
                              $uploader = new DocumentUploader();
                              $image    = $uploader->uploadDocument($data);
                    }

                    $query = "UPDATE course_category SET title = ?,`image` = ? WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ssi', $data['title'], $image, $data['id']);
                    return $sql->execute();
          }

          public function delete($id)
          {

                    $query = "DELETE FROM location WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    return $sql->execute();
          }

          public function list()
          {
                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                              $query = "SELECT c.title,c.duration,c.eligibility,c.id,cc.title AS category FROM course c INNER JOIN course_category cc ON c.category_id = cc.id WHERE c.status != 0";
                              $sql   = $this->conn->prepare($query);
                              $sql->execute();
                              $result = $sql->get_result();
                              return $result->fetch_all(MYSQLI_ASSOC);
                    } else {
                              return "Invalid request method";
                    }
          }
}
