<?php
    include_once "database_connection.php";
    session_start();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $sql = "select *, count(username) as count from users where username = '".$username."'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['count'] > 0){
            if($row['pass'] == $pass){
                session_start();
                $_SESSION['username'] = $username;
                echo "<script> document.location.href = '../admin/index.php';</script>";
            }else{
                echo "<script> document.location.href = '../admin/login.php?error=wrongPass';</script>";
            }
        }else{
            echo "<script> document.location.href = '../admin/login.php?error=wrongPass';</script>";
        }
    }else{
        //Error message
        echo "<script> document.location.href = '../admin/login.php?error=wrongPass';</script>";
    }
?>
