<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');

include '../_class/dbConfig.php';
date_default_timezone_set('Asia/Kolkata');


$conn = (new dbConfig)->getConnection();

$name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$for = filter_var($_POST['for'], FILTER_SANITIZE_SPECIAL_CHARS);
$whatsappNoti = $_POST['whatsapp-noti'];
$date = date('Y-m-d H:i:s');


if (empty($name) || empty($email) || empty($phone) || empty($for)) {
          http_response_code(400);
          echo json_encode(array("message" => "All fields are required.", "status" => false));
          exit;
}

$query = "INSERT INTO common_leads (`name`, `email`, `phone`, `whatsapp_noti`, `for`, `date_time`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sssiss", $name, $email, $phone, $whatsappNoti, $for, $date);
$stmt->execute();

if ($stmt->affected_rows > 0) {
          http_response_code(201);
          echo json_encode(array("message" => "Lead created successfully.", "status" => true));
} else {
          http_response_code(500);
          echo json_encode(array("message" => "Lead creation failed.", "status" => false));
}
