<?php
    session_start();
    include_once '../handlers/database_connection.php';
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
    <title>Đăng nhập</title>
</head>
<body id="login-page">
    <div id="login-form">
        <form method="post" action="../handlers/login_handler.php">
            <div class="form-logo">
                <img id="login-logo" src="../images/logo.png"/>
            </div>
            <div class="form-items">
                <div>
                    <label style="color:white;">Tên đăng nhập</label>
                </div>
                <input type="text" class="login-input" name="username" value="admin" autofocus />
                <hr id="login-hr1">
            </div>
            <div class="form-items">
                <div>
                    <label style="color:white;">Mật khẩu</label>
                </div>
                <input type="password" class="login-input" value="trantieubang" name="pass"/>
                <hr id="login-hr2">
            </div>
            <small id="login-error" style="color:red; margin: 15px; display:none; font-size: 13px;">Sai tên đăng nhập hoặc mật khẩu!</small>
            <div class="form-btn">
                <button type="submit" name="submit" class="submit-button">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>

<?php
    if(isset($_GET['error'])){
        if($_GET['error'] == "wrongPass"){
            echo "<script>document.getElementById('login-hr1').style.backgroundColor = 'red';</script>";
            echo "<script>document.getElementById('login-hr2').style.backgroundColor = 'red';</script>";
            echo "<script>document.getElementById('login-error').style.display = 'block';</script>";
        }else{
            echo "<script>
                document.getElementById('login-error').innerHtml = 'Đã có lỗi xảy ra, xin vui lòng thử lại!';   
                document.getElementById('login-error').style.display = 'block';
                </script>";

        }
    }
?>
</html