<?php
    include_once "../handlers/database_connection.php";

    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    $sql = "select * from contact_request";
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
    <scrip src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></scrip>
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></scrip>
    <scrip src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></scrip>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Liên hệ</title>
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
                <h2>Yêu cầu liên hệ</h2>
            </div>
            <div class="container">
                <div id="remove-success" class="sufee-alert alert with-close alert-success alert-dismissible fade show" style="display:none;">
                    Xóa thành công!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div id="remove-unsuccess" class="sufee-alert alert with-close alert-danger alert-dismissible fade show" style="display:none;">
                    Xóa không thành công, hãy thử lại!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table" style="table-layout:fixed;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Số điện thoại</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col" >Nội dung</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr id="request-<?php echo $row['request_id'] ?>">
                                        <th scope="row"><?php echo $row['request_id'] ?></th>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['timestamp'] ?></td>
                                        <td style="width: 100px;"><?php echo $row['note'] ?></td>
                                        <td><button type="button" class="btn btn-danger remove-request" id='remove-<?php echo $row['request_id'] ?>'>Xóa</button></td>
                                    </tr>
                                <?php
                                        }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.remove-request').on('click', function(){
                var id = $(this).attr("id");
                if(confirm('Bạn có chắc chắn muốn xóa tin nhắn này ?')){
                    $.ajax({
                        url: "../js/ajax/remove_request.php",
                        method: "post",
                        data:{
                            id:id
                        },
                        success: function(data){
                            console.log(data);
                            if(data == 'ok'){
                                $("#request-" + id.split("-")[1]).remove();
                                document.getElementById('remove-success').style.display = "block";
                            }else{
                                document.getElementById('remove-unsuccess').style.display = "block";
                            }
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>