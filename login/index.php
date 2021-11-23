<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <form  method="POST" action="add.php" role="from" >
        <div class="mb-3">
            <label class="form-label">Họ Tên </label>
            <input type="text" class="form-control" name="name" >
        </div>
        <br/>
        <div class="mb-3 form-check">
            <label class="form-label">Giới Tính:</label>
            <input type="radio" class="form-check-input" name="sex" value="nam" checked >Nam
            <input type="radio" class="form-check-input" name="sex" value="nữ" >Nữ
            <input type="radio" class="form-check-input" name="sex" value="khong_xac_dinh" >Không Xác Định
        </div>
        <br/>
        <div class="mb-3">
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" name="birthday">
        </div>
        <br/>
        <div class="mb-3">
            <label  class="form-label">Quê Quán</label>
            <input type="text" class="form-control" name="que_quan" >
        </div>
        <br/>
        <div class="mb-3">
            <label >Ngoại Ngữ:</label>
            <select name="language" >
                <option name="english" value="english">Tiếng Anh</option>
                <option name="japanese" value="japanese">Tiếng Nhật</option>
                <option name="french" value="french">Tiếng Pháp</option>
            </select>
        </div>
        <div class="mb-3">
            <label >Thông tin thêm</label>
            <br/>
            <textarea name="review" rows="4" cols="50"></textarea>
            <br/>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>