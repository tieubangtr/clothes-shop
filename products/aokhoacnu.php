<?php
    include_once '../handlers/database_connection.php';

    $sql_get_akw = "select * from product where type = 'akw' order by product_id desc";
    $result_get_akw = mysqli_query($connection, $sql_get_akw);

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
    <link rel="manifest" href="../manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="..//ms-icon-144x144.png">
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
    <title>??o kho??c n???</title>
</head>
<body>
    <header>
            <div class="women-navbar">
                <nav class="nav navbar navbar-default">
                    <div class="container-fluid">
                        <div>
                            <a href="../index.php">
                                <img class="logo" src="../images/logo.png"/>
                            </a>
                        </div>
                        <div class="navbar-items">
                            <ul>
                                <li><a href="../index.php">Trang ch???</a></li>
                                <li><a href="../men.php">Th???i trang nam</a></li>
                                <li><a href="../women.php">Th???i trang n???</a></li>
                                <li><a href="../contact.php">Li??n h???</a></li>
                            </ul>
                        </div>
                        <div class="search-bar">
                        </div>
                    </div>
                </nav>
            </div>
    </header>
    <main>
        <div class="product-title">
            <p>
                <b>??o kho??c n???</b>
            </p>
            <hr>
        </div>
        <div class="products-container-all">
            <div class="row">
                <?php
                    while($row_get_akw = mysqli_fetch_assoc($result_get_akw)){
                ?>
                <div class="products" >
                    <div class="product-images-container">
                        <img class="product-images" src="../images/products/<?php echo $row_get_akw['img'] ?>"/>
                        <div class="add-to-cart">
                            <p class="add_item" id="product-<?php echo $row_get_akw['product_id']?>">Th??m v??o gi???</p>
                        </div>
                    </div>
                    <div class="product-name">
                        <a href="#" class="p-name"><?php echo $row_get_akw['name'] ?></a>
                    </div>
                    <div class="product-price" id="<?php echo $row_get_akw['price'] ?>">
                        <p><?php echo $row_get_akw['price'] ?> VN??</p>
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
        <img  src="../images/icons/shopping-cart.png"/>
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
                            <li><a href="quanduinam.php" style="color:white;">Qu???n ????i</a></li>
                            <li><a href="aokhoacnam.php" style="color:white;">??o kho??c</a></li>
                            <li><a href="aophongnam.php" style="color:white;">??o ph??ng</a></li>
                            <li><a href="quandainam.php" style="color:white;">Qu???n d??i</a></li>
                        </ul>
                    </div>
   
                    <div class="footer-products">
                        <ul>
                            <p style="font-size: 24px;">Th???i trang n???</p>
                            <li><a href="vaynu.php" style="color:white;">V??y</a></li>
                            <li><a href="aokhoacnu.php" style="color:white;">??o kho??c</a></li>
                            <li><a href="aophongnu.php" style="color:white;">??o ph??ng</a></li>
                            <li><a href="quandainu.php" style="color:white;">Qu???n d??i</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/main.js">
    </script>
    <script>
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
                    url: "../js/ajax/submit_order.php",
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
        });
    </script>

</body>
</html>