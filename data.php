<?php
if(isset($_FILES['image'])){
    $fileName = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetemp = $_FILES['image']["tmp_name"];
    $filetype = $_FILES['image']['type'];

    move_uploaded_file($filetemp ,"uploadFile/".$fileName);
}
$name = $_POST['fname'];
$age = $_POST['age'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image</title>
</head>
<body>
    <img src="uploadFile/<?php echo $fileName;?>" alt="Uploaded images">
    <h1><?php echo $name?> </h1>
    <h1><?php echo $age?> </h1>

</body>
</html>