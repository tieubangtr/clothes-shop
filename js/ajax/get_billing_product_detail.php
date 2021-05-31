<?php
    include_once "../../handlers/database_connection.php";
    $output = "";
    if(isset($_POST['product'])){
        $data_handling = substr($_POST['product'], 8);
        $data = explode("_", $data_handling);
        $id = $data[0];
        $quantity = $data[1];
        $sql = "select * from product where product_id = '".$id."'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='form-group'>
                        <label class='col-form-label'>".$row['name']." : <span><b style='color: blue'>".$quantity."</b><span></label>
                    </div>
                    <hr>";
    }
    echo $output;
?>