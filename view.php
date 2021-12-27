<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | View</title>
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <style>
        body
        {
            background: rgba(0,0,0,0.5);
        }
    </style>
</head>
<body>
    
    <?php

    $conn = new mysqli("localhost","root","root","crud");

    if($conn->connect_error){
        die("Error!");
    }
    else{
        if(isset($_GET['view'])){
            $id = $_GET['view'];
            $mysql = "SELECT * FROM datas WHERE id='$id'";
            $result = $conn->query($mysql);
        }
    }

    ?>

    <div class="container mt-1">
        <table class="table table-dark">
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>Location</th>
                <th>Back</th>
            </tr>

            <?php
                while ($row = $result->fetch_assoc()):
            ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['firstname'] ?></td>
                <td><?php echo $row['location'] ?></td>
                <td>
                    <a href="index.php" class="btn btn-warning">Back</a>
                </td>
            </tr>

            <?php
                endwhile;
            ?>
        </table>
    </div>

</body>
</html>