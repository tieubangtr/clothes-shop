<?php
    
    function genderFormat($g){
        if($g == "nam"){
            return "men";
        }else{
            return "women";
        }
    }

    include_once 'database_connection.php';
    $id = $_POST['id'];
    $file = $_FILES['upload'];
    $gender = $_POST['gender'];
    $imgName = $file['name'];
    $imgTmpName = $file['tmp_name'];
    $imgSize = $file['size'];
    $imgError = $file['error'];
    $imgType = $file['type'];

    $imgExtension = explode('.', $imgName);
    $input_imgExt = strtolower(end($imgExtension));
    $newImgName = $id.'.'.$input_imgExt;

    $allowed = array('jpg', 'jpeg', 'png');
    if (in_array($input_imgExt, $allowed)) {
        if ($imgError === 0) {
            $imgDestination = '../images/products/'.$imgName;
            move_uploaded_file($imgTmpName, $imgDestination);
            $sql_update_image = "update product set img = '".$imgName."' where product_id = '".$id."';";
            if(mysqli_query($connection, $sql_update_image)){
                header("Location: ../admin/".genderFormat($gender)."_products.php");
            }else{
                echo mysqli_error($connection);
            }
        }else{
            header("Location: ../admin/".genderFormat($gender)."_products.php?error=error");
        }
    }else{
        header("Location: ../admin/".genderFormat($gender)."_products.php?error=invalidType");
    }
?>