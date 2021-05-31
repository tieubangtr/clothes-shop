<?php
    include_once "../../handlers/database_connection.php";
    $output = "";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $total = $_POST['total'];
    $products = $_POST['products'];
    if(empty($name) || empty($phone) || empty($address)){
        $output = "error";
    }else{
        $sql = "INSERT INTO `billing`(`customer_name`, `sdt`, `products`, `address`, `ngaydathang`, `total_price`) VALUES ('".$name."', '".$phone."', '".$products."', '".$address."', NOW(), '".$total."')";
        if($result = mysqli_query($connection, $sql)){
            $output = "ok";
        }else{
            $output = "error";
        }
    }

    echo $output;
?>