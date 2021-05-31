<?php
    include_once "../handlers/database_connection.php";

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    $sql = "select * from settings";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
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
    <title>Chỉnh sửa trang chủ</title>
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
                    <a href="homepage.php"> >  Chỉnh sửa trang chủ</a>
                </li>
                <li>
                    <a href="add_product.php"> >  Thêm sản phẩm mới</a>
                </li>
                <li>
                    <a href="men_products.php"> >  Sản phẩm nam</a>
                </li>
                <li>
                    <a href="women_products.php"> >  Sản phẩm nữ</a>
                </li>
                <li>
                    <a href="billing.php"> >  Đơn hàng</a>
                </li>
                <li>
                    <a href="contact_requests.php"> >  Liên hệ</a>
                </li>
                <li>
                    <a href="logout.php"> >  Đăng xuất</a>
                </li>
            </ul>
        </div>
        <div class="admin-content">
            <div  style="display:block; text-align: center; margin: 70px;">
                <h2>Chỉnh sửa trang chủ</h2>
            </div>
            <div class="container">
                <div class="flex-div">
                    <div style="width: 250px; height:150px; margin: 30px;">
                        <img src="../images/<?php echo $row['img1'] ?>" style='width: 100%; height: 100%'/>
                        <p>Ảnh 1</p>
                    </div>
                    <div style="width: 250px; height:150px; margin: 30px;">
                        <img src="../images/<?php echo $row['img2'] ?>" style='width: 100%; height: 100%'/>
                        <p>Ảnh 2</p>
                    </div>
                    <div style="width: 250px; height:150px; margin: 30px;">
                        <img src="../images/<?php echo $row['img3'] ?>" style='width: 100%; height: 100%'/>
                        <p>Ảnh 3</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body card-block">
                        <form action="../handlers/homepage_settings_handler.php" method="post" enctype="multipart/form-data">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh 1</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="img1" class="form-control-file"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh 2</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="img2" class="form-control-file"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="file-input" class=" form-control-label">Ảnh 3</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="file-input" name="img3" class="form-control-file"></div>
                            </div>
                            <div class="form-group"><label for="title1" class=" form-control-label">Tiêu đề 1</label><input type="text" name='title1' placeholder="Nội dung...." class="form-control" value='<?php echo $row['title1'] ?>'></div>
                            <div class="form-group"><label for="sub-title1" class=" form-control-label">Tiêu đề phụ 1</label><input type="text" name='subtitle1' placeholder="Nội dung...." class="form-control" value='<?php echo $row['subtitle2'] ?>'></div>
                            <div class="form-group"><label for="title2" class=" form-control-label">Tiêu đề 2</label><input type="text" name='title2' placeholder="Nội dung...." class="form-control" value='<?php echo $row['title2'] ?>'></div>
                            <div class="form-group"><label for="sub-title2" class=" form-control-label">Tiêu đề phụ 2</label><input type="text" name='subtitle2' placeholder="Nội dung...." class="form-control" value='<?php echo $row['subtitle2'] ?>'></div>
                            <div class="form-group"><label for="title3" class=" form-control-label">Tiêu đề 3</label><input type="text" id="company" name='title3' placeholder="Nội dung...." class="form-control" value='<?php echo $row['title3'] ?>'></div>
                            <div class="form-group"><label for="sub-title3" class=" form-control-label">Tiêu đề phụ 3</label><input type="text" name='subtitle3' placeholder="Nội dung...." class="form-control" value='<?php echo $row['subtitle3'] ?>'></div>
                            <button type="submit" name='submit' class="btn btn-primary">Lưu thay đổi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>