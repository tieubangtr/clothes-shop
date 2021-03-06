<?php
    include_once "handlers/database_connection.php";
    $sql_get_settings = "select * from settings";
    $result_get_settings = mysqli_query($connection, $sql_get_settings);
    $row_settings = mysqli_fetch_assoc($result_get_settings);

    $sql_get_new_wt = "select * from product where type = 'apw' order by product_id desc limit 4";
    $result_get_new_wt = mysqli_query($connection, $sql_get_new_wt);

    $sql_get_new_vw = "select * from product where type = 'vw' order by product_id desc limit 4";
    $result_get_new_vw = mysqli_query($connection, $sql_get_new_vw);

    $sql_get_new_akm = "select * from product where type = 'akm' order by product_id desc limit 4";
    $result_get_new_akm = mysqli_query($connection, $sql_get_new_akm);

    $sql_get_new_qm = "select * from product where type = 'qm' order by product_id desc limit 4";
    $result_get_new_qm = mysqli_query($connection, $sql_get_new_qm);

    function priceFormat($price){
        for($i = strlen($price); $i <= 0; $i = $i - 3){
            $price = substr_replace($price, ".", $i, 0);
        }
        return $price;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Tieu Bang Shop</title>
</head>
<body>
    <header>
        <div id="header-images" style="background-image: url('images/<?php echo $row_settings['img1']; ?>');">
            <div>
                <nav class="nav navbar navbar-default">
                    <div class="container-fluid">
                        <div>
                            <a href="index.php">
                                <img class="logo" src="images/logo.png"/>
                            </a>
                        </div>
                        <div class="navbar-items">
                            <ul>
                                <li><a href="index.php">Trang ch???</a></li>
                                <li><a href="men.php">Th???i trang nam</a></li>
                                <li><a href="women.php">Th???i trang n???</a></li>
                                <li><a href="contact.php">Li??n h???</a></li>
                            </ul>
                        </div>
                        <div class="search-bar">
                        </div>
                    </div>
                </nav>
            </div>
            <p class="previous" id="3">&#10094;</p>
            <p class="next" id="2">&#10095;</p>
            <div>
                <p id="header-title1"><?php echo $row_settings['title1']; ?></p>
                <p id="header-title2"><?php echo $row_settings['subtitle1']; ?></p>
            </div>
        </div>
    </header>
    <main>
        <!-- danh m???c s???n ph???m -->
        <div class="container">
            <div class="row">
                <div class="men-main" onclick="men()">
                    <p id="men-title1">Th???i trang Nam</p>
                </div>
                <div class="women-main" onclick="women()">
                    <p id="women-title1">Th???i trang N???</p>
                </div>
            </div>
        </div>
        <!-- s???n ph???m b??n ch???y -->
        <div class="main-title">
            <p>
                <b>S???n ph???m m???i - b??n ch???y</b>
            </p>
            <hr>
        </div>
        <div class="products-container">
            <!-- s???n ph???m ??o thun n??? -->
            <div class="row">
                <?php
                    while($row_get_new_wt = mysqli_fetch_assoc($result_get_new_wt)){
                ?>
                <div class="products" >
                    <div class="product-images-container" >
                        <img class="product-images" src="images/products/<?php echo $row_get_new_wt['img'] ?>"/>
                        <div class="add-to-cart" >
                            <p class="add_item" id="product-<?php echo $row_get_new_wt['product_id']?>">Th??m v??o gi???</p>
                        </div>
                    </div>
                    <div class="product-name" >
                        <a href="#" class="p-name"><?php echo $row_get_new_wt['name'] ?></a>
                    </div>
                    <div class="product-price" id="<?php echo $row_get_new_wt['price'] ?>">
                        <p><?php echo $row_get_new_wt['price'] ?> VN??</p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- vay v?? qu???n ??o m??a ????ng n??? -->
        <div class="products-container">
            <div class="row">
                <?php
                    while($row_get_new_vw = mysqli_fetch_assoc($result_get_new_vw)){
                ?>
                <div class="products" >
                    <div class="product-images-container">
                        <img class="product-images" src="images/products/<?php echo $row_get_new_vw['img'] ?>"/>
                        <div class="add-to-cart">
                            <p class="add_item" id="product-<?php echo $row_get_new_vw['product_id']?>">Th??m v??o gi???</p>
                        </div>
                    </div>
                    <div class="product-name">
                        <a href="#" class="p-name"><?php echo $row_get_new_vw['name'] ?></a>
                    </div>
                    <div class="product-price" id="<?php echo $row_get_new_vw['price'] ?>">
                        <p><?php echo $row_get_new_vw['price'] ?> VN??</p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- s???n ph???m ??o kho??c nam -->
        <div class="products-container">
            <div class="row">
            <?php
                    while($row_get_new_akm = mysqli_fetch_assoc($result_get_new_akm)){
                ?>
                <div class="products" >
                    <div class="product-images-container">
                        <img class="product-images" src="images/products/<?php echo $row_get_new_akm['img'] ?>"/>
                        <div class="add-to-cart">
                            <p class="add_item" id="product-<?php echo $row_get_new_akm['product_id']?>">Th??m v??o gi???</p>
                        </div>
                    </div>
                    <div class="product-name">
                        <a href="#" class="p-name"><?php echo $row_get_new_akm['name'] ?></a>
                    </div>
                    <div class="product-price" id="<?php echo $row_get_new_akm['price'] ?>">
                        <p><?php echo $row_get_new_akm['price'] ?> VN??</p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <!-- s???n ph???m qu???n nam -->
        <div class="products-container">
            <div class="row">
                <?php
                    while($row_get_new_qm = mysqli_fetch_assoc($result_get_new_qm)){
                ?>
                <div class="products" >
                    <div class="product-images-container">
                        <img class="product-images" src="images/products/<?php echo $row_get_new_qm['img'] ?>"/>
                        <div class="add-to-cart">
                            <p class="add_item" id="product-<?php echo $row_get_new_qm['product_id']?>">Th??m v??o gi???</p>
                        </div>
                    </div>
                    <div class="product-name">
                        <a href="#" class="p-name"><?php echo $row_get_new_qm['name'] ?></a>
                    </div>
                    <div class="product-price" id="<?php echo $row_get_new_qm['price'] ?>">
                        <p><?php echo $row_get_new_qm['price'] ?> VN??</p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>    
        <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gi??? h??ng c???a b???n</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="cart-modal-body" style="padding: 15px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
                    <button type="button" class="btn btn-warning" id="submitOrder">?????t h??ng</button>
                </div>
                </div>
            </div>
        </div>              
    </main>
    <div id="shopping-cart" style="cursor:pointer;" >
        <img  src="images/icons/shopping-cart.png"/>
        <div id="shopping-cart-index">
            <p id="cart-items">0</p>
        </div>
    </div>
    <footer>
        <div>
            <div class="footer-wrapper">
                <div class="footer-items">
                    <p>Shop th???i trang Tr???n Ti???u B???ng</p>
                    <p>?????a ch???: Khoa C??ng ngh??? th??ng tin Tr?????ng ?????i h???c Th???y L???i</p>
                    <p>??i???n tho???i: 1851061876</p>
                    <p>Email: tieubangtrw@gmail.com</p>

                </div>
                <div class="footer-items">
                    <div class="footer-products">
                        <ul>
                            <p style="font-size: 24px;">Th???i trang nam</p>
                            <li><a href="products/quanduinam.php" style="color:white;">Qu???n ????i</a></li>
                            <li><a href="products/aokhoacnam.php" style="color:white;">??o kho??c</a></li>
                            <li><a href="products/aophongnam.php" style="color:white;">??o ph??ng</a></li>
                            <li><a href="products/quandainam.php" style="color:white;">Qu???n d??i</a></li>
                        </ul>
                    </div>
   
                    <div class="footer-products">
                        <ul>
                            <p style="font-size: 24px;">Th???i trang n???</p>
                            <li><a href="products/vaynu.php" style="color:white;">V??y</a></li>
                            <li><a href="products/aokhoacnu.php" style="color:white;">??o kho??c</a></li>
                            <li><a href="products/aophongnu.php" style="color:white;">??o ph??ng</a></li>
                            <li><a href="products/quandainu.php" style="color:white;">Qu???n d??i</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        var index = 1;
        $(document).ready(function(){
            $('#shopping-cart').on('click', function(){
                displayCart();
                $('#cartModal').modal('show');
            });
            $('#submitOrder').on('click', function(){
                let product_data_array = [];
                let cartItems = localStorage.getItem('productsInCart');
                cart = JSON.parse(cartItems);
                for(i in cart){
                    let item  = cart[i].productId + "_" + cart[i].inCart;
                    product_data_array.push(item);
                }
                let customerName = $("#ordername").val();
                let customerPhone = $("#orderphone").val();
                let customerAddress = $("#orderaddress").val();
                let totalPrice = localStorage.getItem('totalBilling');
                $.ajax({
                    url: "js/ajax/submit_order.php",
                    method:"post",
                    data:{
                        products: JSON.stringify(product_data_array),
                        name: customerName,
                        phone: customerPhone,
                        address: customerAddress,
                        total: totalPrice
                    },success: function(data){
                        if(data == "ok"){
                            alert("B???n ???? ?????t h??ng th??nh c??ng, c???m ??n b???n ???? ch???n shop Tr???n Ti???u B???ng!");
                            $('#cartModal').modal('hide');
                            localStorage.setItem("totalBilling", 0);
                            localStorage.setItem("cartNumbers", 0);
                            let clear = {};
                            localStorage.setItem("products", clear);
                            $('#cart-items').html("0");
                            $('.cart-modal-body').remove();
                        }else{
                            alert("???? c?? l???i x???y ra, b???n h??y vui l??ng th??? l???i!");
                        }
                    }
                });
            });
            $('.next').on('click', function(){
                var id = $(this).attr('id');
                $.ajax({
                    url: 'js/ajax/get_background_images.php',
                    method: 'post',
                    data:{
                        id:id
                    },
                    success:function(data){
                        var data_array = JSON.parse(data.toString());
                        if(id == "3"){
                            $(".next").prop('id', '1');
                            $(".previous").prop('id', '2');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "yellow");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "yellow");
                        }else if(id == "2"){
                            $(".next").prop('id', '3');
                            $(".previous").prop('id', '1');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "grey");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "grey");
                        }else{
                            $(".next").prop('id', '2');
                            $(".previous").prop('id', '3');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "white");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "white");
                        }
                    }
                });
            });
            $('.previous').on('click', function(){
                var id = $(this).attr('id');
                $.ajax({
                    url: 'js/ajax/get_background_images.php',
                    method: 'post',
                    data:{
                        id:id
                    },
                    success:function(data){
                        var data_array = JSON.parse(data.toString());
                        if(id == "3"){
                            $(".next").prop('id', '1');
                            $(".previous").prop('id', '2');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "white");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "white");
                        }else if(id == "2"){
                            $(".next").prop('id', '3');
                            $(".previous").prop('id', '1');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "grey");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "grey");
                        }else{
                            $(".next").prop('id', '2');
                            $(".previous").prop('id', '3');
                            $('#header-images').css('background-image', "url('images/"+ data_array[0] +"')");
                            $('#header-title1').html(data_array[1]);
                            $('#header-title1').css('color', "yellow");
                            $('#header-title2').html(data_array[2]);
                            $('#header-title2').css('color', "yellow");
                        }
                    }
                });
            });
        });

        function men(){
            document.location.href = "men.php";
        }
        function women(){
            document.location.href = "women.php";
        }
    </script>
</body>
</html>