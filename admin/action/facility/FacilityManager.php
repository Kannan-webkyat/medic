<?php
class FacilityManager
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
                    if (!empty($data['image']['name'])) {
                              $uploader = new DocumentUploader();
                              $path = __DIR__ . '/docs/';
                              $image    = $uploader->uploadDocument($data['image'], $path);
                    }

                    $query = "INSERT INTO facility (title,`image`,created_at) VALUES (?,?,?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('sss', $data['title'], $image, $currentDateTime);
                    return $sql->execute();
          }

          public function edit($data)
          {
                    include './action/modules/documentUploader.php';
                    $image = '';
                    if (!empty($data['image']['name'])) {
                              $uploader = new DocumentUploader();
                              $path = __DIR__ . '/docs/';
                              $image    = $uploader->uploadDocument($data['image'], $path);
                    }

                    if (!empty($image)) {
                              $query = "UPDATE facility SET title = ?,`image` = ? WHERE id = ?";
                              $sql   = $this->conn->prepare($query);
                              $sql->bind_param('ssi', $data['title'], $image, $data['id']);
                    } else {
                              $query = "UPDATE facility SET title = ? WHERE id = ?";
                              $sql   = $this->conn->prepare($query);
                              $sql->bind_param('si', $data['title'], $data['id']);
                    }
                    return $sql->execute();
          }

          public function fetchEdit($id)
          {
                    $query = "SELECT * FROM facility WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    return $result->fetch_assoc();
          }

          public function delete($id)
          {
                    $query = "DELETE FROM facility WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    return $sql->execute();
          }

          public function list()
          {
                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                              $query = "SELECT * FROM facility WHERE `status` != 0 ORDER BY id DESC";
                              $sql   = $this->conn->prepare($query);
                              $sql->execute();
                              $result = $sql->get_result();
                              return $result->fetch_all(MYSQLI_ASSOC);
                    } else {
                              return "Invalid request method";
                    }
          }
}
