<?php
    include_once "../handlers/database_connection.php";

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    $sql_get_men_product = "select count(slt) as count from product where gender = 'nam'";
    $result_get_men_product = mysqli_query($connection, $sql_get_men_product);
    $row_get_men_product = mysqli_fetch_assoc($result_get_men_product);
    $total_men_product = $row_get_men_product['count'];

    $sql_get_women_product = "select count(slt) as count from product where gender = 'nu'";
    $result_get_women_product = mysqli_query($connection, $sql_get_women_product);
    $row_get_women_product = mysqli_fetch_assoc($result_get_women_product);
    $total_women_product = $row_get_women_product['count'];

    $sql_get_total_billing = "select count(billing_id) as count from billing";
    $result_get_total_billing = mysqli_query($connection, $sql_get_total_billing);
    $row_get_total_billing = mysqli_fetch_assoc($result_get_total_billing);
    $total_billing = $row_get_total_billing['count'];

    $sql_get_total_contact_request = "select count(request_id) as count from contact_request ";
    $result_get_total_contact_request = mysqli_query($connection, $sql_get_total_contact_request);
    $row_get_total_contact_request = mysqli_fetch_assoc($result_get_total_contact_request);
    $total_contact_request = $row_get_total_contact_request['count'];

    $total_products = intval($total_men_product) + intval($total_women_product);
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
    <title>Admin</title>
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
                <h2>Thống kê hệ thống</h2>
            </div>
            <div style="display:flex; justify-content:center; align-items: center;">
                <div class="admin-content-box">
                    <div class="content-box total-products">
                        <h4>Tổng sản phẩm</h4>
                        <hr>
                        <h2><?php echo $total_products; ?></h2>
                    </div>
                </div>
                <div class="admin-content-box">
                    <div class="content-box total-men-products">
                        <h4>Sản phẩm nam</h4>
                        <hr>
                        <h2><?php echo $total_men_product; ?></h2>
                    </div>
                </div>
                <div class="admin-content-box">
                    <div class="content-box total-women-products">
                        <h4>Sản phẩm nữ</h4>
                        <hr>
                        <h2><?php echo $total_women_product; ?></h2>
                    </div>
                </div>
                <div class="admin-content-box">
                    <div class="content-box total-orders">
                        <h4>Đơn hàng</h4>
                        <hr>
                        <h2><?php echo $total_billing; ?></h2>
                    </div>
                </div>
                <div class="admin-content-box">
                    <div class="content-box total-contacts">
                        <h4>Tin nhắn liên hệ</h4>
                        <hr>
                        <h2><?php echo $total_contact_request; ?></h2>
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