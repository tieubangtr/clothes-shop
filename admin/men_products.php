<?php
    include_once "../handlers/database_connection.php";

    $sql = "select * from product where gender = 'nam' order by product_id desc";
    $result = mysqli_query($connection, $sql);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="../images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/icons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>S???n ph???m nam</title>
</head>
<body>
    <div class="admin-header">

    </div>
    <div class="admin-wrapper">
        <div class="side-bar">
            <ul>
                <li>
                    <div class="flex-div">
                        <img src="../images/logo.png" class="logo">
                    </div>
                </li>
                <li>
                    <a href="homepage.php"> >  Ch???nh s???a trang ch???</a>
                </li>
                <li>
                    <a href="add_product.php"> >  Th??m s???n ph???m m???i</a>
                </li>
                <li>
                    <a href="men_products.php"> >  S???n ph???m nam</a>
                </li>
                <li>
                    <a href="women_products.php"> >  S???n ph???m n???</a>
                </li>
                <li>
                    <a href="billing.php"> >  ????n h??ng</a>
                </li>
                <li>
                    <a href="contact_requests.php"> >  Li??n h???</a>
                </li>
                <li>
                    <a href="logout.php"> >  ????ng xu???t</a>
                </li>
            </ul>
        </div>
        <div class="admin-content">
            <div  style="display:block; text-align: center; margin: 70px;">
                <h2>S???n ph???m nam</h2>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="products" id="product-<?php echo $row['product_id'] ?>">
                        <div class="product-images-container">
                            <img class="product-images" src='../images/products/<?php echo $row['img']; ?>' id='<?php echo $row['product_id'] ?>'/>
                        </div>
                        <div class="product-name">
                            <a style="cursor:pointer;" class="viewProductDetail" id='<?php echo $row['product_id'] ?>'><?php echo $row['name'] ?></a>
                        </div>
                        <div class="flex-div" style="margin-top: 10px;">
                            <div style="display:inline-block; margin-right: 10px;">
                                <button type="button" class="btn btn-primary btn-sm change-detail" id='change-<?php echo $row['product_id'] ?>'>Ch???nh s???a</button>
                            </div>
                            <div style="display:inline-block;">
                                <button type="button" class="btn btn-danger btn-sm remove-product" id='remove-<?php echo $row['product_id'] ?>'>X??a</button>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

        <!-- Bootstrap 4 modal -->
        <div class="modal fade" id="productDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >Chi ti???t s???n ph???m</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modalDetail">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="changeProductDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ch???nh s???a th??ng tin s???n ph???m</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id = "changeModalDetail">

                        </form>
                        <div class='modal-footer'>
                            <button type='button' class='btn btn-primary save' id='saveChanges-".$row['product_id']."'>L??u thay ?????i</button>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>????ng</button>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="imgDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">???nh s???n ph???m</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id = "changeImg" action="../handlers/change_product_image_handler.php" method="post" enctype="multipart/form-data">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.viewProductDetail').on('click', function(){
                var id = $(this).attr("id");
                $.ajax({
                    
                    url: "../js/ajax/get_product_detail.php",
                    method: "post",
                    data:{
                        id:id
                    },
                    success: function(data){
                        $('#modalDetail').html(data);
                        $('#productDetailModal').modal('show');
                    }
                });
            });
            $('.change-detail').on('click', function(){
                var id = $(this).attr("id");
                $.ajax({
                    url: "../js/ajax/change_product_detail.php",
                    method: "post",
                    data:{
                        id:id
                    },
                    success: function(data){
                        $('#changeModalDetail').html(data);
                        $('#changeProductDetailModal').modal('show');
                        jQuery('.save').attr("id", id);
                    }
                });
            });
            $('.save').on('click', function(){
                var id = $(this).attr("id");
                var product_name = $('#product-name').val();
                var product_type = $('#product-select').val();
                var product_price = $('#product-price').val();
                var product_quantity = $('#product-quantity').val();
                $.ajax({
                    url: "../js/ajax/save_changes_product.php",
                    method: "post",
                    data:{
                        id:id,
                        name: product_name,
                        type: product_type,
                        price: product_price,
                        quantity: product_quantity,
                    },
                    success: function(data){
                        if(data = "ok"){
                            alert('C???p nh???t th??ng tin s???n ph???m th??nh c??ng!');
                            document.location.href = '../admin/men_products.php';
                        }else{
                            alert('???? c?? l???i x???y ra, vui l??ng th??? l???i!');
                            document.location.href = '../admin/men_products.php';
                        }
                    }
                });
            });
            $('.remove-product').on('click', function(){
                var id = $(this).attr("id");
                console.log(id.split("-")[1]);
                if(confirm('B???n c?? ch???c ch???n mu???n x??a s???n ph???m n??y ?')){
                    $.ajax({
                        url: "../js/ajax/remove_product.php",
                        method: "post",
                        data:{
                            id:id
                        },
                        success: function(data){
                            console.log(data);
                            if(data == 'ok'){
                                alert("X??a s???n ph???m th??nh c??ng!");
                                $("#product-" + id.split("-")[1]).remove();
                            }else{
                                alert("???? c?? l???i x???y ra, xin vui l??ng th??? l???i!");
                            }
                        }
                    });
                }
            });
            $('.product-images').on('click', function(){
                var id = $(this).attr("id");
                $.ajax({
                    url: "../js/ajax/change_product_img.php",
                    method: "post",
                    data:{
                        id:id
                    },
                    success: function(data){
                        $('#changeImg').append(data);
                        $('#imgDetailModal').modal('show');
                    }
                });
            });
        });
    </script>
</body>
</html>