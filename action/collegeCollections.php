<?php
function fetchAllCollegeCollections($conn)
{
          $query = "SELECT * FROM college_collection";
          $result = $conn->prepare($query);
          $result->execute();
          $data = $result->get_result()->fetch_all(MYSQLI_ASSOC);

          // college collection colleges
          foreach ($data as &$collegeCollection) {
                    $collegeCollectionColleges = $conn->prepare("SELECT c.*,ccc.college_id
                    FROM college_collection_colleges ccc 
                    INNER JOIN college c ON ccc.college_id = c.id
                    WHERE college_collection_id = ?");
                    $collegeCollectionColleges->bind_param('i', $collegeCollection['id']);
                    $collegeCollectionColleges->execute();
                    $collegeCollectionColleges = $collegeCollectionColleges->get_result();
                    $collegeDatas = $collegeCollectionColleges->fetch_all(MYSQLI_ASSOC);

                    foreach ($collegeDatas as &$collegeData) {
                              // college images
                              $collegeImages = $conn->prepare("SELECT image FROM college_images WHERE college_id = ?");
                              $collegeImages->bind_param('i', $collegeData['college_id']);
                              $collegeImages->execute();
                              $collegeImages = $collegeImages->get_result();
                              $collegeData['images'] = $collegeImages->fetch_all(MYSQLI_ASSOC);
                    }

                    $collegeCollection['colleges'] = $collegeDatas;
          }

          return $data;
}
