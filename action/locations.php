<?php
function getAllLocations(mysqli $connection)
{
          $locationsQuery = "SELECT * FROM `location`";
          $locationsStmt = $connection->prepare($locationsQuery);
          $locationsStmt->execute();
          $locationsData = $locationsStmt->get_result()->fetch_all(MYSQLI_ASSOC);
          return $locationsData;
}
