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
    <title>Liên hệ</title>
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
                                <li><a href="index.php">Trang chủ</a></li>
                                <li><a href="men.php">Thời trang nam</a></li>
                                <li><a href="women.php">Thời trang nữ</a></li>
                                <li><a href="contact.php">Liên hệ</a></li>
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
                                <strong>Liên hệ với chúng tôi</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="handlers/contact_request_handler.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Họ và tên</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Số điện thoại</label></div>
                                        <div class="col-12 col-md-9"><input type="number" id="text-input" name="phone" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Yêu cầu</label></div>
                                        <div class="col-12 col-md-9"><textarea name="note" id="textarea-input" rows="9" placeholder="Nội dung...." class="form-control"></textarea></div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg" name='submit' style="width: 250px; margin-left: 100px;">
                                        Gửi yêu cầu
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-us-info">
                    <div class="card">
                        <div class="card-header">
                            <strong>Thông tin liên hệ</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <div class="col col-md-3"><label class=" form-control-label"><b>Địa chỉ</b></label></div>
                                <div class="col-12 col-md-9">
                                    <p class="form-control-static">175 Tây Sơn, Đống Đa, Hà Nội</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col col-md-3"><label class=" form-control-label"><b>Số điện thoại</b></label></div>
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
                    <p>Shop thời trang Trần Tiểu Bằng</p>
                    <p>Địa chỉ: Khoa Công nghệ thông tin Trường Đại học Thủy Lợi</p>
                    <p>Điện thoại: 1851061876</p>
                    <p>Email: tieubangtrw@gmail.com</p>

                </div>
                <div class="footer-items">
                    <div class="footer-products">
                        <ul>
                            <p style="font-size: 24px;">Thời trang nam</p>
                            <li><a href="products/quanduinam.php" style="color:white;">Quần đùi</a></li>
                            <li><a href="products/aokhoacnam.php" style="color:white;">Áo khoác</a></li>
                            <li><a href="products/aophongnam.php" style="color:white;">Áo phông</a></li>
                            <li><a href="products/quandainam.php" style="color:white;">Quần dài</a></li>
                        </ul>
                    </div>
   
                    <div class="footer-products">
                        <ul>
                            <p style="font-size: 24px;">Thời trang nữ</p>
                            <li><a href="products/vaynu.php" style="color:white;">Váy</a></li>
                            <li><a href="products/aokhoacnu.php" style="color:white;">Áo khoác</a></li>
                            <li><a href="products/aophongnu.php" style="color:white;">Áo phông</a></li>
                            <li><a href="products/quandainu.php" style="color:white;">Quần dài</a></li>
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
                        alert('Gửi yêu cầu thành công, cảm ơn quý khách!');        
                    </script>";
            }else{
                echo "<script>
                        alert('Đã có lỗi xảy ra, xin vui lòng thử lại!');        
                    </script>";
            }
        }
    ?>
</body>
</html>