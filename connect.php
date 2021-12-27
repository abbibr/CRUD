<?php

    @session_start();
    $conn = new mysqli("localhost","root","root","crud");
    
    $update = false;
    $id = 0;
    $name = "";
    $location = "";

    if($conn->connect_error){
        die("Error!");
    }
    else{
        if(isset($_POST['btn'])){
            $name = $_POST['name'];
            $location = $_POST['location'];

            $mysql = $conn->prepare("INSERT INTO datas(id,firstname,location)
                                    VALUES(NULL,?,?)");
            $mysql->bind_param("ss",$name,$location);
            $mysql->execute();

            $_SESSION['message'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";

            @header("Location: index.php");
        }
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            
            $mysql = "DELETE FROM datas WHERE id='$id'";
            $result = $conn->query($mysql);

            $_SESSION['message'] = "Record has been deleted!";
            $_SESSION['msg_type'] = "danger";
        }
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];

            $mysql = "SELECT * FROM datas WHERE id= $id";
            $result = $conn->query($mysql);

            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()) {
                    $update = true;
                    $name = $row['firstname'];
                    $location = $row['location'];
                }
            }
        }
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $location = $_POST['location'];

            $mysql = "UPDATE datas SET firstname='$name', 
            location='$location' WHERE id='$id'";
            $result = $conn->query($mysql);

            $_SESSION['message'] = "Record has been updated!";
            $_SESSION['msg_type'] = "warning";

            @header("Location: index.php");
        }
    }

    $conn->close();

?>