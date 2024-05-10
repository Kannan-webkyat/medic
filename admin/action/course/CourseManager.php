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
            $path     = __DIR__ . '/docs/';
            $image    = $uploader->uploadDocument($data['bannerImage'], $path);
        }

        $slug = strtolower(str_replace(' ', '_', $data['title']));

        $query = "INSERT INTO course (category_id,title,slug,duration,eligibility,minimum_age,minimum_percentage,about,job_opportunity,banner_image,created_at) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('issssssssss', $data['categoryId'], $data['title'], $slug, $data['duration'], $data['elegibitliy'], $data['minimumAge'], $data['minimumPercentage'], $data['about'], $data['jobOpertunity'], $image, $currentDateTime);
        return $sql->execute();
    }

    public function edit($data)
    {
        include './action/modules/documentUploader.php';
        $image = '';
        if (!empty($data['bannerImage']['name'])) {
            $uploader = new DocumentUploader();
            $path     = __DIR__ . '/docs/';
            $image    = $uploader->uploadDocument($data['bannerImage'], $path);
        }

        $slug = strtolower(str_replace(' ', '_', $data['title']));

        $query = "UPDATE course SET title = ?,slug = ?, duration = ?, eligibility = ?, minimum_age = ?, minimum_percentage = ?, about = ?, job_opportunity = ?" . (!empty($image) ? ",banner_image = ?" : "") . " WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        if (!empty($image)) {
            $sql->bind_param('sssssssssi', $data['title'], $slug, $data['duration'], $data['elegibitliy'], $data['minimumAge'], $data['minimumPercentage'], $data['about'], $data['jobOpertunity'], $image, $data['id']);
        } else {
            $sql->bind_param('ssssssssi', $data['title'], $slug, $data['duration'], $data['elegibitliy'], $data['minimumAge'], $data['minimumPercentage'], $data['about'], $data['jobOpertunity'], $data['id']);
        }
        $result = $sql->execute();
        return $result;
    }

    public function fetchEdit($id)
    {
        $query = "SELECT * FROM course WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('i', $id);
        $sql->execute();
        $result = $sql->get_result();
        return $result->fetch_assoc();
    }

    public function delete($id)
    {
        $query = "DELETE FROM course WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('i', $id);
        return $sql->execute();
    }

    public function list()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $query = "SELECT c.title,c.duration,c.eligibility,c.id,cc.title AS category FROM course c INNER JOIN course_category cc ON c.category_id = cc.id WHERE c.status != 0 ORDER BY c.id DESC";
            $sql   = $this->conn->prepare($query);
            $sql->execute();
            $result = $sql->get_result();
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return "Invalid request method";
        }
    }
}
