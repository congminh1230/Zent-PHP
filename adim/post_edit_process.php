<?php
    require_once('connection.php');
    session_start();
    $dataUpload = $_POST;
    $id = (isset($_GET['id']) ? $_GET['id']:0);
// lấy ảnh
// kiểm tra xem file tồn tại hay không
    if(isset($_FILES['avatar'])) {
        setcookie('delete_smg',true,time() +10);
    }
// tạo thư mục uploat và lấy tên thư mục uploat
    $target_dir = "images/";
    $target_file = $target_dir .basename($_FILES['avatar']['name']);
// lấy phần mở rộng của file 
    $imagesFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// kiểm tra xem có phải file ảnh hay ko
    $check = getimagesize($_FILES['avatar']['tmp_name']);
    if($check !== false) {
        setcookie('delete_smg',true,time() +10);
    }else {
        setcookie('delete_smg',false,time() +10);
    }
// lấy ra kích thước file
    $file_size = $_FILES['avatar']['size'];
// echo "kích thước file:" .$file_size;
// uploat file lên server 
    $uploat = move_uploaded_file($_FILES['avatar']['tmp_name'],$target_file);

// gửi data lên sql

    $sql = "UPDATE posts SET title= '".$dataUpload['title']."' , description = '".$dataUpload['description']."',thumbnail = '".$_FILES['avatar']['name']."' WHERE id = $id; ";
    echo $sql;
    $status = $conn -> query($sql);
    var_dump($status);
    if($status == true) {
        header('Location:posts.php');
    }else {
        header('Location:post_edit.php?id='.$id);
    };
?>