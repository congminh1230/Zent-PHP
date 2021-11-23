<?php
    session_start();
    $info_list= $_SESSION['infos'];
    // echo "<pre>";
    //     print_r($info_list);
    // echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Danh sách sản phẩm trong kho</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Họ Và Tên</th>
        <th>Giới Tính</th>
        <th>Ngày Sinh</th>
        <th>Quê Quán</th>
        <th>Ngoại Ngữ</th>
        <th>Thông tin thêm</th>
      </tr>
    </thead>
    <tbody>
        <?php
            foreach ($info_list as $value) {
                ?> 
                
                    <tr>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['sex'] ?></td>
                        <td><?= $value['birthday'] ?></td>
                        <td><?= $value['que_quan'] ?></td>
                        <td><?= $value['language'] ?></td>
                        <td><?= $value['review'] ?></td>
          
                    </tr>
                
                
                <?php
            }
        ?>
        
    </tbody>
  </table>
</div>

</body>
</html>