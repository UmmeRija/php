<?php
include 'connection.php';

$fileName = '';
if(isset($_FILES['image'])){
    $fileName = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetemp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];

    move_uploaded_file($filetemp , "uploadFile/".$fileName);
}
$p_name = $_POST['name'];
$p_price = $_POST['price'];
$p_category = $_POST['category'];
$p_description = $_POST['description'];
