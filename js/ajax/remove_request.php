<?php
    include_once "../../handlers/database_connection.php";
    $output = "";
    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 7);
        $sql = "delete from contact_request where request_id = '".$id."'";
        if($result = mysqli_query($connection, $sql)){
            $output = "ok";
        }else{
            $output = "error";
        }
    }else{
        $output = "error";
    }
    echo $output;
?>