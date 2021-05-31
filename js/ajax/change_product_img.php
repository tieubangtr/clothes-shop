<?php
    include_once "../../handlers/database_connection.php";
    $output = "";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "select gender, img from product where product_id = '".$id."'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='product-images-container'>
                        <img style='width:100%; height:100%' src='../images/products/".$row['img']."'/>
                    </div>
                    <div class='form-group' style='display:none;'>
                        <label for='product-img' class='col-form-label'>ID</label>
                        <input type='text' id='product-img' name='id' value='".$id."'>
                    </div>
                    <div class='form-group' style='display:none;'>
                        <label for='product-img' class='col-form-label'>Giới tính</label>
                        <input type='text' id='product-img' name='gender' value='".$row['gender']."'>
                    </div>
                    <div class='form-group'>
                        <label for='product-img' class='col-form-label'>Chỉnh sửa ảnh sản phẩm</label>
                        <input type='file' id='product-img' name='upload'>
                    </div>
                    <div class='modal-footer'>
                        <button type='submit' class='btn btn-primary save'>Lưu thay đổi</button>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                    </div>";
    }else{
        $output = "error";
    }
    echo $output;
?>

