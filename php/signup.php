<?php
session_start();
include_once "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$image_name = "";

if (isset($_FILES['image'])) {
    $image_name = time() . '_' . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $image_name);
}

$ran_id = rand(time(), 100000000);
$status = "Active now";
$encrypt_pass = md5($password);

$insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
VALUES ({$ran_id}, '{$fname}', '{$lname}', '{$email}', '{$encrypt_pass}', '{$image_name}', '{$status}')");

if ($insert_query) {
    echo "success";
}

?>