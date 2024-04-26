<?php
class CollegeManager
{
    private mysqli $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addCollege($data)
    {
        $currentDateTime = date('Y-m-d H:i:s');

        $query = "INSERT INTO college (title,about,location_id,category_id,direct,featured,created_at) VALUES (?,?,?,?,?,?,?)";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('ssiiiis', $data['title'], $data['about'], $data['locationId'], $data['categoryId'], $data['direct'], $data['featured'], $currentDateTime);
        return $sql->execute();
    }

    public function editCollege($data)
    {
        $query = "UPDATE college SET title = ?,about = ?,location_id = ?,category_id = ?,direct = ?,featured = ? WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('ssiiii', $data['title'], $data['about'], $data['locationId'], $data['categoryId'], $data['direct'], $data['featured'], $data['id']);
        return $sql->execute();
    }

    public function deleteCollege($id)
    {
        $query = "DELETE FROM college WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('i', $id);
        return $sql->execute();
    }

    public function listColleges()
    {
        $query = "SELECT * FROM college WHERE status != 0";
        $sql   = $this->conn->prepare($query);
        $sql->execute();
        $result = $sql->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
