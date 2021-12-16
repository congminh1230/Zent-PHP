<?php
require_once('models/Category.php');
require_once('controllers/BaseController.php');

class CategoryController extends BaseController {
    public function index() {
        $category = new Category();
        $categories = $category->getList();
        $this->view("categories/list.php", [
            'categories' => $categories,
        ]);
        // require_once('views/Categries/list.php');

    }
    public function create() {
        $this -> view("Categories/create.php");
    }
    public function store() {
        $data = $_POST;
        $data_insert =[
            'name' => $data['name'],
            'parent_id' => $data['parent_id'],
            'thumbnail'  => $data['thumbnail'],
            'description' => $data['description'],
            'created_at' => $data['created_at']
        ];   
        $category = new Category();
        $status = $category->create($data_insert);

        $this -> redirect("index.php?mod=category&act=index");

    }
}

?>