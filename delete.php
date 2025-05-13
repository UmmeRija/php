<?php
include "connection.php";
$p_id = $_GET['Id'];

$sql = "DELETE FROM class WHERE Id = $p_id";

$query = mysqli_query($con , $sql);
header("Location:http://localhost/rija/table.php");
mysqli_close($con);
?>