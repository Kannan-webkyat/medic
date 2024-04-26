<?php
class CouresCategoryManager
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
                    if (isset($data['image'])) {
                              $uploader = new DocumentUploader();
                              $path = __DIR__ . '/docs/';
                              $image    = $uploader->uploadDocument($data['image'], $path);
                    }

                    $query = "INSERT INTO course_category (title,`image`,created_at) VALUES (?,?,?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('sss', $data['title'], $image, $currentDateTime);
                    return $sql->execute();
          }

          public function edit($data)
          {
                    include './action/modules/documentUploader.php';
                    $image = '';
                    if (isset($_FILES['image'])) {
                              $uploader = new DocumentUploader();
                              $image    = $uploader->uploadDocument($_FILES);
                    }

                    $query = "UPDATE course_category SET title = ?,`image` = ? WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ssi', $data['title'], $image, $data['id']);
                    return $sql->execute();
          }

          public function delete($id)
          {
                    $query = "DELETE FROM course_category WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    return $sql->execute();
          }

          public function list()
          {
                    $query = "SELECT * FROM course_category WHERE status != 0";
                    $sql   = $this->conn->prepare($query);
                    $sql->execute();
                    $result = $sql->get_result();
                    return $result->fetch_all(MYSQLI_ASSOC);
          }
}