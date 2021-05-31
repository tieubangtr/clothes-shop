<?php
    include_once 'database_connection.php';
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $note = $_POST['note'];
        $sql = "INSERT INTO `contact_request`(`name`, `phone`, `email`, `note`, `timestamp`) VALUES (?, ?, ?, ?, NOW())";
        if($stmt = mysqli_prepare($connection, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $note);
            mysqli_stmt_execute($stmt);
            //Success message
            header("Location: ../contact.php?status=success");
        }else{
            header("Location: ../contact.php?status=error");
            //Error message
        }
    }else{
        // header("Location: ../contact.php?status=error");
        // //Error message
    }
?>