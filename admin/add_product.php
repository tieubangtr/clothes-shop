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
    <title>Th??m s???n ph???m m???i</title>
</head>
<body >
    <div class="container" style="display: flex; justify-content:center; align-items:center;">
        <div style="width: 600px;">
            <div class="card">
                <div class="card-header">
                    <strong>Th??m s???n ph???m m???i</strong>
                </div>
                <div class="card-body card-block">
                    <form action="../handlers/add_product_handler.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">T??n s???n ph???m</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Gi?? th??nh</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="email-input" name="price" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">S??? l?????ng nh???p kho</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="text-input" name="slt" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gi???i t??nh</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="gioitinh" value="nam" class="form-check-input">Nam
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="gioitinh" value="nu" class="form-check-input">N???
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Ki???u lo???i s???n ph???m</label></div>
                            <div class="col-12 col-md-9">
                                <select name="type" id="select" class="form-control">
                                    <option value="qdm">Qu???n ????i nam</option>
                                    <option value="akm">??o kho??c nam</option>
                                    <option value="apm">??o ph??ng nam</option>
                                    <option value="qm">Qu???n d??i nam</option>
                                    <option value="vw">V??y n???</option>
                                    <option value="akw">??o kho??c n???</option>
                                    <option value="apw">??o ph??ng n???</option>
                                    <option value="qw">Qu???n d??i n???</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">???nh s???n ph???m</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file" class="form-control-file"></div>
                        </div>
                        <div>
                            <small id="empty" style="display:none; color:red;">D??? li???u kh??ng ???????c ????? tr???ng!</small>
                            <small id="imgSizeInvalid" style="display:none; color:red;">Dung l?????ng ???nh v?????t qu?? gi???i h???n cho ph??p!</small>
                            <small id="imgUploadError" style="display:none; color:red;">L???i t???i ???nh l??n!</small>
                            <small id="imgTypeInvalid" style="display:none; color:red;">?????nh d???nh ???nh kh??ng ph?? h???p!</small>
                        </div>
                        <div class="flex-div" style="margin-top: 30px;">
                            <button type="submit" name="submit" class="btn btn-success btn-lg">
                                Th??m s???n ph???m
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == 'empty'){
                echo "<script>
                        document.getElementById('empty').style.display = 'block';
                    </script>";
            }else if($_GET['error'] == 'imgSizeInvalid'){
                echo "<script>
                        document.getElementById('imgSizeInvalid').style.display = 'block';
                    </script>";
            }else if($_GET['error'] == 'imgUploadError'){
                echo "<script>
                        document.getElementById('imgUploadError').style.display = 'block';
                    </script>";                
            }else if($_GET['error'] == 'imgTypeInvalid'){
                echo "<script>
                        document.getElementById('imgTypeInvalid').style.display = 'block';
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