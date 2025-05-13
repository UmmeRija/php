<?php
include 'connection.php';
$name = $_POST['username'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
// $pasword = $_POST['password'];
$dateofbirth = $_POST['dateofBirth'];
$city = $_POST['city'];
$country = $_POST['country'];
// $image_name = $_FILES['image']['name'];
// $image_tmp = $_FILES['image']['tmp_name'];
// $upload_path = 'uploads/' . $image_name;

// Save the uploaded image to server
// move_uploaded_file($image_tmp, $upload_path);


$sql = "INSERT INTO forms(`username`, `lastName`, `Gender`, `phone`, `email`, `dateofBirth`, `city`, `country`, `image`) VALUES ('{$name}' , '{$lastname}','{$gender}', '{$phone}' ,'{$email}','{$pasword}','{$dateofbirth}' ,'{$city}','{$country}')";

$result = mysqli_query($con,$sql);
header('location: http://localhost/rija/properFormInPhp/table.php');
mysqli_close($con);