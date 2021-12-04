<?php
    require_once('connection.php');
    $sql = "SELECT * FROM posts ";
    $result =  $conn->query($sql);
    $posts = array();
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
    
    $sql2 = "SELECT * FROM categories ";
    $result =  $conn->query($sql2);
    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Update New Posts</h3>
    <h1>Update:</h1>
    <hr>
        <form action="post_add_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" >
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" >
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" placeholder="" name="content" >
            </div>
            <div class="form-group">
                <label for="">Category_id</label>
                <select name="category_id" class="form-control">
                    <?php 
                        foreach($categories as $category) {?>
                            <option value="<?= $category['id'] ?>"><?= $category['name'] ?> </option>

                       <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label">Chọn file cần add</label>
                <input type="file" name="avatar" class="form-">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>                                        
    </div>
</body>
</html>        