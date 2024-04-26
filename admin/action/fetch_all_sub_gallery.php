<?php
require_once '../../class/query.php';
$obj       = new Query();
$dataArray = [];

$gallery_id = $_GET['id'];

//! fetch all gallery
$fetch_all_main_gallery = $obj->selectData("sub_gallery_id,image", "tbl_sub_gallery", "where status != 0 and gallery_id = $gallery_id");
if (mysqli_num_rows($fetch_all_main_gallery) > 0) {
    $m = 0;
    while ($gallery_row = mysqli_fetch_array($fetch_all_main_gallery)) {
        $dataArray[$m]['sub_gallery_id']   = $gallery_row['sub_gallery_id'];
        $dataArray[$m]['image']             = $gallery_row['image'];
        $m++;
    }
}
echo json_encode($dataArray);
