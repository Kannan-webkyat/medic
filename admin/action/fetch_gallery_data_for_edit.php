<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../class/query.php';
$obj       = new Query();
$dataArray = [];
$gallery_id = $_GET['id'];


//! fetch all gallery
$fetch_all_main_gallery = $obj->selectData("main_gallery_name", "tbl_main_gallery", "where status != 0 and main_gallery_id = $gallery_id");
if (mysqli_num_rows($fetch_all_main_gallery) > 0) {
    $m = 0;
    while ($gallery_row = mysqli_fetch_array($fetch_all_main_gallery)) {
        $dataArray[$m]['main_gallery_name'] = $gallery_row['main_gallery_name'];
        $m++;
    }
}
echo json_encode($dataArray);