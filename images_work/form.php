<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="savedata.php" mathod="post" enctype="multipart/form-data">
            <label for="">Name:</label>
            <input type="text" name="name" required><br><br>

            <label for="">Price:</label>
            <input type="number" name="price" required><br><br>

             <label for="">Category:</label>
            <input type="text" name="category" required><br><br>

            <label for="">Description:</label>
            <textarea type="text" name="description" required></textarea><br><br>

             <label for="">Image:</label>
            <input type="file" name="image" required><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>