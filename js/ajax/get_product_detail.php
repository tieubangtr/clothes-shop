<?php
    include_once "../../handlers/database_connection.php";
    $output = "";

    function typeFormat($type){
        if($type== 'qdm'){
            return "Quần đùi nam";
        }else if($type == 'akm'){
            return "Áo khoác nam";
        }else if($type == 'vw'){
            return "Váy nữ";
        }else if($type == 'apm'){
            return "Áo phông nam";
        }else if($type == 'qm'){
            return "Quần dài nam";
        }else if($type == 'akw'){
            return "Áo khoác nữ";
        }else if($type == 'apw'){
            return "Áo phông nữ";
        }else{
            return "Quần dài nữ";
        }
    }

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "select * from product where product_id = '".$id."'";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $output = "<div class='flex-div'>
                        <div class='product-images-container'>
                            <img class='product-images' src='../images/products/".$row['img']."'/>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h5>
                            Tên sản phẩm
                        </h5>
                        <p>".$row['name']."</p>
                        <hr>
                        <h5>
                            Loại sản phẩm
                        </h5>
                        <p>".typeFormat($row['type'])."</p>
                        <hr>
                        <h5>
                            Giá thành
                        </h5>
                        <p>".$row['price']." VNĐ</p>
                        <h5>
                            Số lượng tồn
                        </h5>
                        <p>".$row['slt']."</p>
                    </div>";
    }
    echo $output;
?>