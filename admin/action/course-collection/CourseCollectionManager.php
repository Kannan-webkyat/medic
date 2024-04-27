<?php
class CourseCollectionManager
{
          private mysqli $conn;

          public function __construct($db)
          {
                    $this->conn = $db;
          }

          public function add($data)
          {
                    $currentDateTime = date('Y-m-d H:i:s');

                    $query = "INSERT INTO course_collection (title) VALUES (?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('s', $data['title']);
                    if ($sql->execute()) {
                              $courseCollectionId = $sql->insert_id;
                              if (isset($data['courses'])) {
                                        foreach ($data['courses'] as $courseId) {
                                                  $query = "INSERT INTO course_collection_courses (course_collection_id, course_id) VALUES (?, ?)";
                                                  $sql = $this->conn->prepare($query);
                                                  $sql->bind_param('ii', $courseCollectionId, $courseId);
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
                    $query = "UPDATE course_collection SET title = ? WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('si', $data['title'], $data['id']);
                    if ($sql->execute()) {
                              $courseCollectionId = $data['id'];
                              if (isset($data['courses'])) {
                                        // First, clear existing courses
                                        $deleteQuery = "DELETE FROM course_collection_courses WHERE course_collection_id = ?";
                                        $deleteSql = $this->conn->prepare($deleteQuery);
                                        $deleteSql->bind_param('i', $courseCollectionId);
                                        $deleteSql->execute();

                                        // Then, insert new course entries
                                        foreach ($data['courses'] as $courseId) {
                                                  $insertQuery = "INSERT INTO course_collection_courses (course_collection_id, course_id) VALUES (?, ?)";
                                                  $insertSql = $this->conn->prepare($insertQuery);
                                                  $insertSql->bind_param('ii', $courseCollectionId, $courseId);
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
                    $query = "SELECT * FROM course_collection WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    $sql->execute();
                    $result = $sql->get_result();
                    $data = $result->fetch_assoc();

                    // fetch courses
                    $fetchCoursesQuery = "SELECT course_id FROM course_collection_courses WHERE course_collection_id = ?";
                    $fetchCoursesSql = $this->conn->prepare($fetchCoursesQuery);
                    $fetchCoursesSql->bind_param('i', $id);
                    $fetchCoursesSql->execute();
                    $coursesResult = $fetchCoursesSql->get_result();
                    $data['courses'] = $coursesResult->fetch_all(MYSQLI_ASSOC);

                    return $data;
          }

          public function delete($id)
          {

                    $query = "DELETE FROM course_collection WHERE id = ?";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('i', $id);
                    return $sql->execute();
          }

          public function list()
          {
                    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                              $query = "SELECT cc.id, cc.title, COUNT(ccc.course_id) AS course_count FROM course_collection cc INNER JOIN course_collection_courses ccc ON cc.id = ccc.course_collection_id GROUP BY cc.id, cc.title ORDER BY cc.id DESC";
                              $sql   = $this->conn->prepare($query);
                              $sql->execute();
                              $result = $sql->get_result();
                              return $result->fetch_all(MYSQLI_ASSOC);
                    } else {
                              return "Invalid request method";
                    }
          }
}
