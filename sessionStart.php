<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" value = "Login" <?php
        $name = $_POST["userName"];
        echo $_SESSION['userName'];
        echo"Session create"
?>
     name = "" id = "">
    </form>
</body>
</html>