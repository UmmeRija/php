<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo $_GET['fname']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?php echo $_GET['fname']?></h1>
</body>
</html>