<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/css/bootstrap.min.css">
    <style>
        body
        {
            background: #ccc;
        }
    </style>
</head>
<body>

    <?php include "connect.php"; ?>

    <?php if(isset($_SESSION['message'])): ?>

        <div class="alert alert-<?php echo $_SESSION['msg_type']; ?>">
            <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            ?>
        </div>

    <?php endif; ?>

    <?php
        $conn = new mysqli("localhost","root","root","crud");
    
        if($conn->connect_error){
            die("Error!");
        }
        else{
            $mysql = "SELECT * FROM datas";
            $result = $conn->query($mysql);
        }
    ?>

    <div class="container">
        <table class="table table-dark">
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th colspan="3">Action</th>
            </tr>

            <?php
                while ($row = $result->fetch_assoc()):
            ?>

            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td>
                    <a href="view.php?view=<?php echo $row['id']; ?>"
                        class="btn btn-success">View</a>
                    <a href="index.php?edit=<?php echo $row['id']; ?>" 
                        class="btn btn-info">Edit</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>"
                        class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php endwhile; ?>

        </table>
    </div>

    <div class="d-flex justify-content-center">
        <form action="<?php echo htmlspecialchars('connect.php'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" 
                    value="<?php echo $name; ?>" name="name">
            </div>
            <div class="form-group my-3">
                <label>Location</label>
                <input type="text" class="form-control" 
                    value="<?php echo $location; ?>" name="location">
            </div>
            <div class="form-group">

                <?php if($update == false): ?>
                    <button type="submit" name="btn" class="btn btn-primary">Save</button>
                <?php else: ?>
                    <button type="submit" name="update" class="btn btn-info">Update</button>
                <?php endif; ?>

            </div>
        </form>
    </div>

</body>
</html>