<?php
function fetchAllCategories(mysqli $conn)
{
    $query  = "SELECT title,slug,id FROM course_category";
    $result = $conn->prepare($query);
    $result->execute();
    $categoryDatas = $result->get_result()->fetch_all(MYSQLI_ASSOC);

    foreach ($categoryDatas as &$categoryData) {
        // fetching all course under this category
        $courses = $conn->prepare("SELECT title,slug,id FROM course WHERE category_id = ?");
        $courses->bind_param('i', $categoryData['id']);
        $courses->execute();
        $coursesResult = $courses->get_result();
        $coursesData   = $coursesResult->fetch_all(MYSQLI_ASSOC);

        $categoryData['courses'] = $coursesData;
    }

    return $categoryDatas;
}
