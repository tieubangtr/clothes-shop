<?php
    include_once "../../handlers/database_connection.php";
    $output = "";
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 7);
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $sql = "update `product` set name = ?, price = ?, type = ?, slt = ? where product_id = '".$id."'";
        if($stmt = mysqli_prepare($connection, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $name, $price, $type, $quantity);
            mysqli_stmt_execute($stmt);
            //Success message
            $output = "ok";
        }else{
            //Error message
            $output = "error";
        }
    }else{
        //Error message
        $output = "error";
    }
    echo $output;
?>