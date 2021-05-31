<?php
    include_once '../../handlers/database_connection.php';
    $output = '';
    if(isset($_POST['id'])){
        $number = $_POST['id'];
        $imgNumber = "img".$number."";
        $sql = "select ".$imgNumber.", title".$number.", subtitle".$number." from settings";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "[\"".$row[$imgNumber]."\", \"".$row['title'.$number]."\", \"".$row['subtitle'.$number]."\"]";
    }else{
        //Error Message
        $output = 'error';
    }
    echo $output;
?>