<?php
include "connection.php";
$SQL = "SELECT * FROM class";
$result = mysqli_query($con , $SQL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(to right, #e0c3fc, #8ec5fc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #dee2e6;
            text-align: center;
            vertical-align: middle;
            padding: 12px;
        }

        thead {
            background-color: #6f42c1;
            color: white;
        }

        tbody tr:hover {
            background-color: #f1e8fc;
        }

        @media (max-width: 768px) {
            .table-responsive {
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Class Details</h2>
        <?php if(mysqli_num_rows($result) > 0){ ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Faculty</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Gender']; ?></td>
                        <td><?php echo $row['City']; ?></td>
                        <td><?php echo $row['Faculty']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php } else { ?>
            <p class="text-center">No records found.</p>
        <?php } ?>
    </div>
</body>
</html>
