<?php
    require_once('views/Partials/header.php');
?>
<div class="table-responsive">
            <a href="index.php?mod=category&act=create" class="btn btn-primary">Add New Category</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Thumbnail</th>
                        <th>Description</th>
                        <th>Parent_id</th>
                        <th>Created_at</th>
                        <th>Action</th>
                    </thead>
                    <?php
                        foreach ($categories as $category) {?>
                            <tr>
                                <td><?= $category['id'] ?></td>
                                <td><?= $category['name'] ?></td>
                                <td>
                                    <img src="./images/<?= $category['thumbnail'] ?>" width="100px" height="100px">
                                </td>
                                <td><?= $category['description'] ?></td>
                                <td><?= $category['parent_id'] ?></td>
                                <td><?= $category['created_at'] ?></td>
                                <td>
                                    <a href="category_edit.php?id=<?= $category['id'] ?>" class="btn btn-success">Edit</a>
                                    <a href="category_delete.php?id=<?= $category['id'] ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php }
                    ?>                     
            </table>
        </div>
<?php
    require_once('views/Partials/footer.php');
?>