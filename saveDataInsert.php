<?php
include 'connection.php';
$name = $_POST['userName'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];

$sql = "INSERT INTO class(`Name`, `Age`, `Gender`) VALUES('{$name}', '{$age}','{$gender}')";
$query = mysqli_query($con , $sql);
 
header("location: http://localhost/rija/afterInserting.php");
mysqli_close($con);
?>