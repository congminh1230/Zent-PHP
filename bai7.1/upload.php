<?php
session_start();

function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override){
  $upload_status = true;
  $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
  $errors = array();

  $types = "";
  if(is_array($allowtypes)){
    foreach ($allowtypes as $key => $type) {
      $types .= $type.",";
    }
  }

  $types = trim($types,',');
  if(!isset($_FILES[$input_name])){
    $errors[] = "khong co du lieu file";
    $upload_status = false;

  }

  if ($_FILES[$input_name]['error']!=0) {
    $errors[] = "Du lieu upload bi loi";
    $upload_status = false;
  }

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if(!in_array($imageFileType, $allowtypes )){
    $errors[] = "chi duoc upload cac dinh dang file".$types;
    $upload_status = false;
  }

  if($_FILES[$input_name]["size"] > $max_size*1024*1024){
    $errors[] = "Khong duoc upload anh lon hon $max_size (MB).";
    $upload_status = false;
  }

  if(file_exists($target_file) && $override == false){
    $errors[] = "Ten file da ton tai tren server, khong duoc ghi de";
    $upload_status = false;
  }

  if($upload_status){
    if(move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)){
      return array(true, $target_file);
      $errors[] = "Up file thanh cong";
    }
    else{
      echo "string";
      $errors[] = "Co loi xay ra khi upload file. Vui long kiem tra lai";
      return array(false, $errors);
    }
  }
    else{
      return array(false, $errors);
    }
  }

  $upload = uploadFile('avatar', 'images', array('jpg','jpeg', 'png', 'gif'), 1, true);

  $_SESSION['upload_status'] = $upload;
  header('Location: uploadfile.php');



?>
