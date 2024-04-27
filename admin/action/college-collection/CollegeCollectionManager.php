<?php
class CollegeCollectionManager
{
          private mysqli $conn;

          public function __construct($db)
          {
                    $this->conn = $db;
          }

          public function add($data)
          {
                    $currentDateTime = date('Y-m-d H:i:s');

                    $query = "INSERT INTO college_collection (title,created_at) VALUES (?,?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ss', $data['title'], $currentDateTime);
                    if ($sql->execute()) {
                              $collegeCollectionId = $sql->insert_id;
                              if (!empty($data['colleges'])) {
                                        foreach ($data['colleges'] as $collegeId) {
                                                  $query = "INSERT INTO college_collection_colleges (college_collection_id, college_id) VALUES (?, ?)";
                                                  $sql = $this->conn->prepare($query);
                                                  $sql->bind_param('ii', $collegeCollectionId, $collegeId);
                                                  $sql->execute();
                                        }
                              }
                              return true;
                    } else {
                              return false;
                    }
          }

          public function edit($data)
          {
                    $query = "UPDATE college_collection SET title = ? WHERE id = ?";
                    $sql = $this->conn->prepare($query);
                    $sql->bind_param('si', $data['title'], $data['id']);
                    if ($sql->execute()) {
                              $collegeCollectionId = $data['id'];
                              if (isset($data['colleges'])) {
                                        // First, clear existing colleges
                                        $deleteQuery = "DELETE FROM college_collection_colleges WHERE college_collection_id = ?";
                                        $deleteSql = $this->conn->prepare($deleteQuery);
                                        $deleteSql->bind_param('i', $collegeCollectionId);
                                        $deleteSql->execute();

                                        // Then, insert new college entries
                                        foreach ($data['colleges'] as $collegeId) {
                                                  $insertQuery = "INSERT INTO college_collection_colleges (college_collection_id, college_id) VALUES (?, ?)";
                                                  $insertSql = $this->conn->prepare($insertQuery);
                                                  $insertSql->bind_param('ii', $collegeCollectionId, $collegeId);
                                                  $insertSql->execute();
                                        }
                              }
                              return true;
                    } else {
                              return false;
                    }
          }

          public function fetchEdit($id)
          {
                    $query = "SELECT * FROM college_collection WHERE id = ?";
                    $sql = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    $data = $result->fetch_assoc();

                    // fetch colleges under this collection
                    $query = "SELECT college_id FROM college_collection_colleges WHERE college_collection_id = ?";
                    $sql = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    $colleges = $result->fetch_all(MYSQLI_ASSOC);
                    $data['colleges'] = array_column($colleges, 'college_id');

                    return $data;
          }

          public function delete($id)
          {

                    $query = "DELETE FROM college_collection WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    return $sql->execute();
          }

          public function list()
          {
                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                              $query = "SELECT cc.id, cc.title, COUNT(ccc.college_id) AS college_count FROM college_collection cc INNER JOIN college_collection_colleges ccc ON cc.id = ccc.college_collection_id GROUP BY cc.id, cc.title ORDER BY cc.id DESC";
                              $sql   = $this->conn->prepare($query);
                              $sql->execute();
                              $result = $sql->get_result();
                              return $result->fetch_all(MYSQLI_ASSOC);
                    } else {
                              return "Invalid request method";
                    }
          }
}
