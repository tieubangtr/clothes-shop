<?php
    include_once "../../handlers/database_connection.php";
    $output = "";

    function menTypeFormat($type){
        if($type == 'qdm'){
            return "<option value='qdm' selected>Quần đùi nam</option>
                    <option value='akm'>Áo khoác nam</option>
                    <option value='apm'>Áo phông nam</option>
                    <option value='qm'>Quần dài nam</option>";
        }else if($type == 'akm'){
            return "<option value='qdm'>Quần đùi nam</option>
                    <option value='akm' selected>Áo khoác nam</option>
                    <option value='apm'>Áo phông nam</option>
                    <option value='qm'>Quần dài nam</option>";
        }else if($type == 'apm'){
            return "<option value='qdm' >Quần đùi nam</option>
                    <option value='akm' >Áo khoác nam</option>
                    <option value='apm' selected>Áo phông nam</option>
                    <option value='qm'>Quần dài nam</option>";
        }else{
            return "<option value='qdm' >Quần đùi nam</option>
                    <option value='akm'>Áo khoác nam</option>
                    <option value='apm'>Áo phông nam</option>
                    <option value='qm' selected>Quần dài nam</option>";
        }
    }

    function womenTypeFormat($type){
        if($type == 'vw'){
            return "<option value='vw' selected>Váy nữ</option>
                    <option value='akw'>Áo khoác nữ</option>
                    <option value='apw'>Áo phông nữ</option>
                    <option value='qw'>Quần dài nữ</option>";
        }else if($type == 'akw'){
            return "<option value='vw'>Váy nữ</option>
                    <option value='akw' selected>Áo khoác nữ</option>
                    <option value='apw'>Áo phông nữ</option>
                    <option value='qw'>Quần dài nữ</option>";
        }else if($type == 'apw'){
            return "<option value='vw'>Váy nữ</option>
                    <option value='akw'>Áo khoác nữ</option>
                    <option value='apw' selected>Áo phông nữ</option>
                    <option value='qw'>Quần dài nữ</option>";
        }else{
            return "<option value='vw'>Váy nữ</option>
                    <option value='akw'>Áo khoác nữ</option>
                    <option value='apw'>Áo phông nữ</option>
                    <option value='qw' selected>Quần dài nữ</option>";
        }
    }

    if(isset($_POST['id'])){
        $id = substr($_POST['id'], 7);
        $sql = "select * from product where product_id = '".$id."'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        if($row['gender'] == 'nam'){
            $productType = menTypeFormat($row['type']);
            $output = " <div class='form-group'>
                            <label for='product-name' class='col-form-label'>Tên sản phẩm</label>
                            <input type='text' class='form-control' id='product-name' value='".$row['name']."'>
                        </div>
                        <div class='form-group'>
                            <label for='product-type' class='col-form-label'>Loại sản phẩm</label>
                            <select name='type' id='product-select' class='form-control'>
                                ".$productType."
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='product-price' class='col-form-label'>Giá thành</label>
                            <input type='number' class='form-control' id='product-price' value='".$row['price']."'>
                        </div>
                        <div class='form-group'>
                            <label for='product-quantity' class='col-form-label'>Số lượng nhập kho</label>
                            <input type='number' class='form-control' id='product-quantity' value='".$row['slt']."'>
                        </div>
                        ";
        }else{
            $productType = womenTypeFormat($row['type']);
            $output = " <div class='form-group'>
                            <label for='product-name' class='col-form-label'>Tên sản phẩm</label>
                            <input type='text' class='form-control' id='product-name' value='".$row['name']."'>
                        </div>
                        <div class='form-group'>
                            <label for='product-type' class='col-form-label'>Loại sản phẩm</label>
                            <select name='type' id='product-select' class='form-control'>
                                ".$productType."
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='product-price' class='col-form-label'>Giá thành</label>
                            <input type='number' class='form-control' id='product-price' value='".$row['price']."'>
                        </div>
                        <div class='form-group'>
                            <label for='product-quantity' class='col-form-label'>Số lượng nhập kho</label>
                            <input type='number' class='form-control' id='product-quantity' value='".$row['slt']."'>
                        </div>
                        ";
        }
    }
    echo $output;
?>