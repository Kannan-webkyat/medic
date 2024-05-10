<?php

class CollegeManager
{
    private mysqli $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function add($data)
    {
        $currentDateTime = date('Y-m-d H:i:s');
        include './action/modules/documentUploader.php';
        $slug = strtolower(str_replace(' ', '-', $data['title']));


        $logo = '';
        if (!empty($data['logo']['name'])) {
            $uploader = new DocumentUploader();
            $logo     = $uploader->uploadDocument($data['logo'], __DIR__ . '/logos/');
        }

        $query = "INSERT INTO college (title,slug,about,location_id,yt_url,direct,featured,created_at,logo,under,approved) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('sssisiissss', $data['title'], $slug, $data['about'], $data['location'], $data['youtubeLink'], $data['isDirectCollege'], $data['isFeatured'], $currentDateTime, $logo, $data['under'], $data['approved']);
        if ($sql->execute()) {
            $collegeId = $sql->insert_id;

            if (!empty($data['collegeImages'])) {
                $path       = __DIR__ . '/docs/';
                $countFiles = count($data['collegeImages']['name']);
                for ($i = 0; $i < $countFiles; $i++) {
                    $originalFileName = $data['collegeImages']['name'][$i];
                    $fileExtension    = pathinfo($originalFileName, PATHINFO_EXTENSION);
                    $newFileName      = uniqid() . '.' . $fileExtension;
                    $targetFilePath   = $path . $newFileName;
                    if (move_uploaded_file($data['collegeImages']['tmp_name'][$i], $targetFilePath)) {
                        // inserting to database
                        $query = "INSERT INTO college_images (college_id, `image`) VALUES (?, ?)";
                        $sql   = $this->conn->prepare($query);
                        $sql->bind_param('is', $collegeId, $newFileName);
                        $sql->execute();
                    }
                }
            }

            // inserting college courses
            if (isset($data['courses'])) {
                foreach ($data['courses'] as $courseId) {
                    $query = "INSERT INTO college_courses (college_id, course_id) VALUES (?, ?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ii', $collegeId, $courseId);
                    $sql->execute();
                }
            }

            // inserting college facilities
            if (isset($data['facility'])) {
                foreach ($data['facility'] as $facilityId) {
                    $query = "INSERT INTO college_facilities (college_id, facility_id) VALUES (?, ?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ii', $collegeId, $facilityId);
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
        include './action/modules/documentUploader.php';
        $slug = strtolower(str_replace(' ', '-', $data['title']));

        $logo = '';
        if (!empty($data['logo']['name'])) {
            $uploader = new DocumentUploader();
            $logo     = $uploader->uploadDocument($data['logo'], __DIR__ . '/logos/');
        }

        if (!empty($logo)) {
            $query = "UPDATE college SET title=?, slug=?, about=?, location_id=?, yt_url=?, direct=?, featured=?, logo=?, approved=?, under=? WHERE id=?";
            $sql   = $this->conn->prepare($query);
            $sql->bind_param('sssssiisssi', $data['title'], $slug, $data['about'], $data['location'], $data['youtubeLink'], $data['isDirectCollege'], $data['isFeatured'], $logo, $data['approved'], $data['under'], $data['collegeId']);
        } else {
            $query = "UPDATE college SET title=?, slug=?, about=?, location_id=?, yt_url=?, direct=?, featured=?, approved=?, under=? WHERE id=?";
            $sql   = $this->conn->prepare($query);
            $sql->bind_param('sssssiissi', $data['title'], $slug, $data['about'], $data['location'], $data['youtubeLink'], $data['isDirectCollege'], $data['isFeatured'], $data['approved'], $data['under'], $data['collegeId']);
        }

        if ($sql->execute()) {
            $collegeId = $data['collegeId'];

            if (!empty($data['collegeImages'])) {
                $path       = __DIR__ . '/docs/';
                $countFiles = count($data['collegeImages']['name']);
                for ($i = 0; $i < $countFiles; $i++) {
                    $originalFileName = $data['collegeImages']['name'][$i];
                    $fileExtension    = pathinfo($originalFileName, PATHINFO_EXTENSION);
                    $newFileName      = uniqid() . '.' . $fileExtension;
                    $targetFilePath   = $path . $newFileName;
                    if (move_uploaded_file($data['collegeImages']['tmp_name'][$i], $targetFilePath)) {
                        // inserting to database
                        $query = "INSERT INTO college_images (college_id, `image`) VALUES (?, ?)";
                        $sql   = $this->conn->prepare($query);
                        $sql->bind_param('is', $collegeId, $newFileName);
                        $sql->execute();
                    }
                }
            }

            // updating college courses
            if (isset($data['courses'])) {
                // First, clear existing courses
                $deleteQuery = "DELETE FROM college_courses WHERE college_id = ?";
                $deleteSql   = $this->conn->prepare($deleteQuery);
                $deleteSql->bind_param('i', $collegeId);
                $deleteSql->execute();

                // Then, insert new course entries
                foreach ($data['courses'] as $courseId) {
                    $query = "INSERT INTO college_courses (college_id, course_id) VALUES (?, ?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ii', $collegeId, $courseId);
                    $sql->execute();
                }
            }

            // updating college facilities
            if (isset($data['facility'])) {
                // First, clear existing facilities
                $deleteQuery = "DELETE FROM college_facilities WHERE college_id = ?";
                $deleteSql   = $this->conn->prepare($deleteQuery);
                $deleteSql->bind_param('i', $collegeId);
                $deleteSql->execute();

                // Then, insert new facility entries
                foreach ($data['facility'] as $facilityId) {
                    $query = "INSERT INTO college_facilities (college_id, facility_id) VALUES (?, ?)";
                    $sql   = $this->conn->prepare($query);
                    $sql->bind_param('ii', $collegeId, $facilityId);
                    $sql->execute();
                }
            }

            return true;
        } else {
            return false;
        }
    }

    public function fetchEdit($id)
    {
        $query = "SELECT * FROM college WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('i', $id);
        $sql->execute();
        $result      = $sql->get_result();
        $collegeData = $result->fetch_assoc();

        // fetching college facilities
        $facilityQuery = "SELECT id,facility_id FROM college_facilities WHERE college_id = ?";
        $facilitySql   = $this->conn->prepare($facilityQuery);
        $facilitySql->bind_param('i', $id);
        $facilitySql->execute();
        $facilityResult            = $facilitySql->get_result();
        $collegeFacilities         = $facilityResult->fetch_all(MYSQLI_ASSOC);
        $collegeData['facilities'] = $collegeFacilities;

        // fetching college courses
        $courseQuery = "SELECT id,course_id FROM college_courses WHERE college_id = ?";
        $courseSql   = $this->conn->prepare($courseQuery);
        $courseSql->bind_param('i', $id);
        $courseSql->execute();
        $courseResult           = $courseSql->get_result();
        $collegeCourses         = $courseResult->fetch_all(MYSQLI_ASSOC);
        $collegeData['courses'] = $collegeCourses;

        // Fetching college images
        $imageQuery = "SELECT `image` FROM college_images WHERE college_id = ?";
        $imageSql   = $this->conn->prepare($imageQuery);
        $imageSql->bind_param('i', $id);
        $imageSql->execute();
        $imageResult           = $imageSql->get_result();
        $collegeImages         = $imageResult->fetch_all(MYSQLI_ASSOC);
        $collegeData['images'] = $collegeImages;

        return $collegeData;
    }

    public function delete($id)
    {
        $query = "DELETE FROM college WHERE id = ?";
        $sql   = $this->conn->prepare($query);
        $sql->bind_param('i', $id);
        return $sql->execute();
    }

    public function list()
    {
        $query = "SELECT c.id,c.title,c.featured,c.direct,l.title AS location FROM college c INNER JOIN location l ON c.location_id = l.id WHERE c.status != 0 ORDER BY c.id DESC";
        $sql   = $this->conn->prepare($query);
        $sql->execute();
        $result = $sql->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
