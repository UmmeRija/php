<?php
include "connection.php";
$SQL = "SELECT * FROM class";
$result = mysqli_query($con , $SQL);
if(mysqli_num_rows($result )>0){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
    
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        
        <tbody>
<?php
while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <th><?php echo $row['Id'];?></th>
                <th><?php echo $row['Name'];?></th>
                <th><?php echo $row['Age'];?></th>
                <th><?php echo $row['Gender'];?></th>
                
            </tr>
<?php
}
            ?>
        </tbody>

    </table>
<?php
}
?>
</body>

</html>
