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
                    $slug = strtolower(str_replace(' ', '-', $data['title']));

                    $image = '';
                    if (isset($data['image'])) {
                              $uploader = new DocumentUploader();
                              $path = __DIR__ . '/docs/';
                              $image    = $uploader->uploadDocument($data['image'], $path);
                    }

                    $query = "INSERT INTO course_category (title,slug,`image`,created_at) VALUES (?,?,?,?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ssss', $data['title'], $slug, $image, $currentDateTime);
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

                    $slug = strtolower(str_replace(' ', '-', $data['title']));

                    if (!empty($image)) {
                              $query = "UPDATE course_category SET title = ?, slug = ?, `image` = ? WHERE id = ?";
                              $sql = $this->conn->prepare($query);
                              $sql->bind_param('sssi', $data['title'], $slug, $image, $data['id']);
                    } else {
                              $query = "UPDATE course_category SET title = ?, slug = ? WHERE id = ?";
                              $sql = $this->conn->prepare($query);
                              $sql->bind_param('ssi', $data['title'], $slug, $data['id']);
                    }
                    return $sql->execute();
          }

          public function fetchEdit($id)
          {
                    $query = "SELECT * FROM course_category WHERE id = ?";
                    $sql = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    return $result->fetch_assoc();
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
                    $query = "SELECT * FROM course_category WHERE status != 0 ORDER BY id DESC";
                    $sql   = $this->conn->prepare($query);
                    $sql->execute();
                    $result = $sql->get_result();
                    return $result->fetch_all(MYSQLI_ASSOC);
          }
}
