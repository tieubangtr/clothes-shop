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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Li??n h???</title>
</head>
<body>
    <header>
        <div id="header-images" style="background-image: url('images/6901389-men-fashion-background.jpg');">
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
            <div class="contact-us-wrapper">
                <div class="contact-us-form">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <strong>Li??n h??? v???i ch??ng t??i</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="handlers/contact_request_handler.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">H??? v?? t??n</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">S??? ??i???n tho???i</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="phone" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Y??u c???u</label></div>
                                        <div class="col-12 col-md-9"><textarea name="note" id="textarea-input" rows="9" placeholder="N???i dung...." class="form-control"></textarea></div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg" name='submit' style="width: 250px; margin-left: 100px;">
                                        G???i y??u c???u
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-us-info">
                    <div class="card">
                        <div class="card-header">
                            <strong>Th??ng tin li??n h???</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <div class="col col-md-3"><label class=" form-control-label"><b>?????a ch???</b></label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">175 T??y S??n, ?????ng ??a, H?? N???i</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col col-md-3"><label class=" form-control-label"><b>S??? ??i???n tho???i</b></label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">1851061876</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col col-md-3"><label class=" form-control-label"><b>Email</b></label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">tieubangtrw@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
       
    </main>
    <div id="shopping-cart">
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
    <script src="js/main.js">

    </script>
    <?php
        if(isset($_GET['status'])){
            if($_GET['status'] == "success"){
                echo "<script>
                        alert('G???i y??u c???u th??nh c??ng, c???m ??n qu?? kh??ch!');        
                    </script>";
            }else{
                echo "<script>
                        alert('???? c?? l???i x???y ra, xin vui l??ng th??? l???i!');        
                    </script>";
            }
        }
    ?>
</body>
</html>