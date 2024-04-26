<?php
require_once '../../class/query.php';
$obj = new Query();
header('Content-Type: application/json; charset=utf-8');
$data = json_decode(file_get_contents('php://input'), true);

if (isset($_FILES['gallery_image']['name'])) {
    $gallery_name  = $_POST['gallery_name'];
    $gallery_image = $_FILES['gallery_image']['name'];
    $extension = pathinfo($gallery_image, PATHINFO_EXTENSION);
    $random_name = uniqid().time().'.'.$extension;
    $path          = '../upload_image/gallery/' . $random_name;
    $info          = [
        'main_gallery_name' => $gallery_name,
        'image'             => $random_name,
        'status'            => 1,
    ];
    $add_gallery = $obj->insertData("tbl_main_gallery", $info);
    if ($add_gallery) {
        // compress($_FILES['gallery_image']['tmp_name'], $path, 80);
        copy($_FILES['gallery_image']['tmp_name'], $path);
        echo 1;
    } else {
        echo 0;
    }
}

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
