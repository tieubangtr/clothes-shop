<?php
    include_once "database_connection.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $gioitinh = $_POST['gioitinh'];
        $price = $_POST['price'];
        $type = $_POST['type'];
        $slt = $_POST['slt'];
        $img = $_FILES['file'];

        //Image handler
        $imgName = $img['name'];
        $imgTmpName = $img['tmp_name'];
        $imgSize = $img['size'];
        $imgError = $img['error'];
        $imgType = $img['type'];

        $imgExtension = explode('.', $imgName);
        $input_imgExt = strtolower(end($imgExtension));

        $allowed = array('jpg', 'jpeg', 'png');
        if (in_array($input_imgExt, $allowed)) {
            if ($imgError === 0) {
                if ($imgSize < 5000000000) {
                    $imgDestination = '../images/products/'.$imgName;
                    move_uploaded_file($imgTmpName, $imgDestination);
                    $sql = "INSERT INTO `product`(`name`, `price`, `gender`, `type`, `slt`, `img`) VALUES (?, ?, ?, ?, ?, ?)";
                    if($stmt = mysqli_prepare($connection, $sql)){
                        mysqli_stmt_bind_param($stmt, "ssssss", $name, $price, $gioitinh, $type, $slt, $imgName);
                        mysqli_stmt_execute($stmt);
                        if($gioitinh == 'nam'){
                            echo "<script>
                                    if(confirm('Thêm sản phẩm mới thành công!')){document.location.href = '../admin/men_products.php'};
                                </script>";
                        }else{
                            echo "<script>
                                if(confirm('Thêm sản phẩm mới thành công!')){document.location.href = '../admin/women_products.php'};
                            </script>";
                        }
                    }else{
                        echo "<script>
                            document.location.href='../admin/add_product.php?error=insertError';
                        </script>";
                    }

                }else{
                    echo "<script>
                            document.location.href='../admin/add_product.php?error=imgSizeInvalid';
                        </script>";
                }
            }else{
                echo "<script>
                            document.location.href='../admin/add_product.php?error=imgUploadError';
                        </script>";
            }
        }else{
            echo "<script>
                    document.location.href='../admin/add_product.php?error=imgTypeInvalid';
                </script>";
        }
    }else{
        //Error message
        echo "<script>
                document.location.href='../admin/add_product.php?error=notSetError';
            </script>";
    }
?>