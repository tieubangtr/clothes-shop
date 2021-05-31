<?php

    include_once 'database_connection.php';
    if(isset($_POST['submit'])){
        $title1 = $_POST['title1'];
        $subtitle1 = $_POST['subtitle1'];
        $title2 = $_POST['title2'];
        $subtitle2 = $_POST['subtitle2'];
        $title3 = $_POST['title3'];
        $subtitle3 = $_POST['subtitle3'];

        $file1 = $_FILES['img1'];
        $img1Name = $file1['name'];
        $img1TmpName = $file1['tmp_name'];
        $img1Size = $file1['size'];
        $img1Error = $file1['error'];
        $img1Type = $file1['type'];

        $file2 = $_FILES['img2'];
        $img2Name = $file2['name'];
        $img2TmpName = $file2['tmp_name'];
        $img2Size = $file2['size'];
        $img2Error = $file2['error'];
        $img2Type = $file2['type'];

        $file3 = $_FILES['img3'];
        $img3Name = $file3['name'];
        $img3TmpName = $file3['tmp_name'];
        $img3Size = $file3['size'];
        $img3Error = $file3['error'];
        $img3Type = $file3['type'];

        if($img1Name == '' && $img2Name == '' && $img3Name != ''){//3
            $img3Extension = explode('.', $img3Name);
            $input_img3Ext = strtolower(end($img3Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img3Ext, $allowed)) {
                if ($img3Error === 0) {
                    $img3Destination = '../images/'.$img3Name;
                    move_uploaded_file($img3TmpName, $img3Destination);
                    $sql_update_image = "update settings set img3 = '".$img3Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else if($img1Name == '' && $img2Name != '' && $img3Name == ''){//2
            $img2Extension = explode('.', $img2Name);
            $input_img2Ext = strtolower(end($img2Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img2Ext, $allowed)) {
                if ($img2Error === 0) {
                    $img2Destination = '../images/'.$img2Name;
                    move_uploaded_file($img2TmpName, $img2Destination);
                    $sql_update_image = "update settings set img2 = '".$img2Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else if($img1Name != '' && $img2Name == '' && $img3Name == ''){//1
            $img1Extension = explode('.', $img1Name);
            $input_img1Ext = strtolower(end($img1Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img1Ext, $allowed)) {
                if ($img1Error === 0) {
                    $img1Destination = '../images/'.$img1Name;
                    move_uploaded_file($img1TmpName, $img1Destination);
                    $sql_update_image = "update settings set img1 = '".$img1Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else if($img1Name == '' && $img2Name == '' && $img3Name == ''){///0
            $sql = "update settings set title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."'";
            if(mysqli_query($connection, $sql)){
                header("Location: ../admin/homepage.php");
            }else{
                echo mysqli_error($connection);
            }
        }else if($img1Name != '' && $img2Name != '' && $img3Name == ''){//12
            $img1Extension = explode('.', $img1Name);
            $input_img1Ext = strtolower(end($img1Extension));

            $img2Extension = explode('.', $img2Name);
            $input_img2Ext = strtolower(end($img2Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img1Ext, $allowed) && in_array($input_img2Ext, $allowed)) {
                if ($img1Error === 0 && $img2Error === 0) {
                    $img1Destination = '../images/'.$img1Name;
                    move_uploaded_file($img1TmpName, $img1Destination);

                    $img2Destination = '../images/'.$img2Name;
                    move_uploaded_file($img2TmpName, $img2Destination);

                    $sql_update_image = "update settings set img1 = '".$img1Name."', img2 = '".$img2Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else if($img1Name != '' && $img2Name == '' && $img3Name != ''){//13
            $img1Extension = explode('.', $img1Name);
            $input_img1Ext = strtolower(end($img1Extension));

            $img3Extension = explode('.', $img3Name);
            $input_img3Ext = strtolower(end($img3Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img1Ext, $allowed) && in_array($input_img3Ext, $allowed)) {
                if ($img1Error === 0 && $img3Error === 0) {
                    $img1Destination = '../images/'.$img1Name;
                    move_uploaded_file($img1TmpName, $img1Destination);

                    $img3Destination = '../images/'.$img3Name;
                    move_uploaded_file($img3TmpName, $img3Destination);

                    $sql_update_image = "update settings set img1 = '".$img1Name."', img3 = '".$img3Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else if($img1Name == '' && $img2Name != '' && $img3Name != ''){//23
            $img3Extension = explode('.', $img3Name);
            $input_img3Ext = strtolower(end($img3Extension));

            $img2Extension = explode('.', $img2Name);
            $input_img2Ext = strtolower(end($img2Extension));
        
            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img3Ext, $allowed) && in_array($input_img2Ext, $allowed)) {
                if ($img3Error === 0 && $img2Error === 0) {
                    $img3Destination = '../images/'.$img3Name;
                    move_uploaded_file($img3TmpName, $img3Destination);

                    $img2Destination = '../images/'.$img2Name;
                    move_uploaded_file($img2TmpName, $img2Destination);

                    $sql_update_image = "update settings set img3 = '".$img3Name."', img2 = '".$img2Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }else{//123
            $img1Extension = explode('.', $img1Name);
            $input_img1Ext = strtolower(end($img1Extension));

            $img2Extension = explode('.', $img2Name);
            $input_img2Ext = strtolower(end($img2Extension));
        

            $img3Extension = explode('.', $img3Name);
            $input_img3Ext = strtolower(end($img3Extension));

            $allowed = array('jpg', 'jpeg', 'png');
            if (in_array($input_img1Ext, $allowed) && in_array($input_img2Ext, $allowed) && in_array($input_img3Ext, $allowed)) {
                if ($img1Error === 0 && $img2Error === 0 && $img3Error === 0) {
                    $img1Destination = '../images/'.$img1Name;
                    move_uploaded_file($img1TmpName, $img1Destination);

                    $img2Destination = '../images/'.$img2Name;
                    move_uploaded_file($img2TmpName, $img2Destination);

                    $img3Destination = '../images/'.$img3Name;
                    move_uploaded_file($img3TmpName, $img3Destination);

                    $sql_update_image = "update settings set img1 = '".$img1Name."', img2 = '".$img2Name."' , img3 = '".$img3Name."', title1 = '".$title1."', title2 = '".$title2."', title3 = '".$title3."', subtitle1 = '".$subtitle1."' ,subtitle2 = '".$subtitle2."' ,subtitle3 = '".$subtitle3."';";
                    if(mysqli_query($connection, $sql_update_image)){
                        header("Location: ../admin/homepage.php");
                    }else{
                        echo mysqli_error($connection);
                    }
                }else{
                    header("Location: ../admin/homepage.php?error=error");
                }
            }else{
                header("Location: ../admin/homepage.php?error=invalidType");
            }
        }
    }
?>