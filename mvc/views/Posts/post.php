<?php
    require_once('views/Partials/header.php');
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="index.php?mod=post&act=create" class="btn btn-primary">Add New Category</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Category_id</th>
                        <th>Content</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </thead>
                    <?php
                        foreach ($posts as $post) {?>
                            <tr>
                                <td><?= $post['id'] ?></td>
                                <td><?= $post['title'] ?></td>
                                <td><?= $post['description'] ?></td>
                                <td>
                                    <img src="./images/<?= $post['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $post['category_id'] ?></td>
                                <!-- <td></td> -->
                                <td><?= $post['content'] ?></td>
                                <td><?= $post['created_at']  ?></td>
                                <td>
                                    <a href="post_edit.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                                    <a href="post_delete.php?id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php }
                    ?>                     
            </table>
        </div>
    </div>
</div>
<?php
    require_once('views/Partials/footer.php');
?>