<?php
    require_once('connection.php');
    $sql = "SELECT * FROM categories ";
    $result =  $conn->query($sql);
    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="category_add.php" class="btn btn-primary">Add New Category</a>
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
    </div>
</div>