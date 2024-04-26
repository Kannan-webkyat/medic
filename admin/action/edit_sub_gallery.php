<?php
require_once '../../class/query.php';
$obj        = new Query();
$gallery_id = $_POST['gallery_id'];



for ($x = 0; $x < sizeof($_FILES['sub_gallery_image']['name']); $x++) {
    $gallery_image = $_FILES['sub_gallery_image']['name'][$x];
     
     $extension = pathinfo($gallery_image, PATHINFO_EXTENSION);
    $random_name = uniqid().time().'.'.$extension;
    $path          = '../upload_image/gallery/' . $random_name;

    $info          = [
        'image'      => $random_name,
        'gallery_id' => $gallery_id,
        'status'     => 1,
    ];
    $add_gallery = $obj->insertData("tbl_sub_gallery", $info);
    // compress($_FILES['sub_gallery_image']['tmp_name'][$x],$path,80);
    copy($_FILES['sub_gallery_image']['tmp_name'][$x],$path);
}
echo 1;

function compress($source, $destination, $quality)
{
    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
    } elseif ($info['mime'] == 'image/gif') {
        $image = imagecreatefromgif($source);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
    } elseif ($info['mime'] == 'image/webp') {
        $image = imagecreatefromwebp($source);
    }
    imagejpeg($image, $destination, $quality);
    return $destination;
};
