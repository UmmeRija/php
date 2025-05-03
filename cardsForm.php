<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="data.php" method = "post" enctype = "multipart/form-data">
    <h1>Form Input</h1>

    <input type="text" name = "fname" required>

    <input type="number" name = "age" required>

    <input type="file" name = "image" required>
    
    <button>Submmit</button>

</form>
</body>
</html>