<?php
    require_once('views/Partials/header.php');
?>
<form action="index.php?mod=post&act=store" method="POST" role="form" enctype="multipart/form-data">
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
                
            </div>
            <div class="form-group">
                <label class="control-label">Chọn file cần add</label>
                <input type="file" name="avatar" class="form-">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>  
<?php
    require_once('views/Partials/footer.php');
?>