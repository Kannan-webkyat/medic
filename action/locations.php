<?php
function getAllLocations(mysqli $connection)
{
    $locationsQuery = "SELECT l.*, COUNT(c.id) AS college_count
                FROM `location` l 
                LEFT JOIN college c 
                    ON c.location_id = l.id
                GROUP BY l.id";
    $locationsStmt  = $connection->prepare($locationsQuery);
    $locationsStmt->execute();
    $locationsData = $locationsStmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $locationsData;
}