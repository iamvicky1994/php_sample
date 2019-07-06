<?php

require_once 'db_connect.php';

if ($_POST) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];

    $sql = "INSERT INTO members (fname,lname,age,contact,active) VALUES ($fname,$lname,$age,$contact,1)";
    if ($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
    } else {
        echo "Erorr while updating record : " . $connect->error;
    }

    $connect->close();
}
    // Image upload coding....

//    if (isset($_FILES['image'])) {
//        $errors = array();
//        $file_name = $_FILES['image']['name'];
//        $file_size = $_FILES['image']['size'];
//        $file_tmp = $_FILES['image']['tmp_name'];
//        $file_type = $_FILES['image']['type'];
//        $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
//
//        $expensions = array("jpeg", "jpg", "png");
//
//        if (in_array($file_ext, $expensions) === false) {
//            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
//        }
//
//        if ($file_size > 2097152) {
//            $errors[] = 'File size must be excately 2 MB';
//        }
//
//        if (empty($errors) == true) {
//            move_uploaded_file($file_tmp, "images/" . $file_name);
//            echo "Success";
//        } else {
//            print_r($errors);
//        }
//    } else {
//        echo " Image upload failed..";
//        echo "<a href='../create.php'><button type='button'>Back</button></a>";
//        echo "<a href='../index.php'><button type='button'>Home</button></a>";
//    }
//
//
//
//    $connect->close();
//}
?>