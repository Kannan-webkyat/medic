<?php
require_once '../../class/query.php';
$obj = new Query();
// header('Content-Type: application/json; charset=utf-8');
// $data = json_decode(file_get_contents('php://input'), true);

$id = $_POST['id'];
$gallery_name = $_POST['gallery_name'];


if (isset($_FILES['gallery_image']['name'])) {
    
    $gallery_image = $_FILES['gallery_image']['name'];
    
     $extension = pathinfo($gallery_image, PATHINFO_EXTENSION);
    $random_name = uniqid().time().'.'.$extension;
    $path          = '../upload_image/gallery/' . $random_name;

    $info = [
        'main_gallery_name' => $gallery_name,
        'image'             => $random_name,
    ];
    $add_gallery = $obj->updateData("tbl_main_gallery", $info, "where main_gallery_id = $id");
    if ($add_gallery) {
        copy($_FILES['gallery_image']['tmp_name'], $path);
        echo 1;
    } else {
        echo 0;
    }
} else {
    $info = [
        'main_gallery_name' => $gallery_name,
    ];
    $add_gallery = $obj->updateData("tbl_main_gallery", $info, "where main_gallery_id = $id");
    if ($add_gallery) {
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
