<?php
function fetchAllLocations($conn)
{
          $query = "SELECT l.*,count(c.id) as total_colleges FROM location l INNER JOIN college c ON c.location_id = l.id GROUP BY l.id";
          $result = $conn->prepare($query);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);
          return $data;
}
