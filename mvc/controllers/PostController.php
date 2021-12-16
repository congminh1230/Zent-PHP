<?php
require_once('models/Post.php');
require_once('controllers/BaseController.php');
class PostController extends BaseController {
    public function index() {
        $post = new Post();
        $posts = $post->getList();
        $this->view("posts/post.php", [
            'posts' => $posts,
        ]);
        

    }
    public function create() {
        $this -> view("Posts/create.php");
    }
    public function store() {
        $data = $_POST;
        $data_insert =[
            'title' => $data['title'],
            'description' => $data['description'],
            'thumbnail'  => $data['thumbnail'],
            'content' => $data['content'],
            'category_id' => $data['category_id'],
            'created_at' => $data['created_at']
        ];   
        $post = new Post();
        $status = $post->create($data_insert);

        $this -> redirect("index.php?mod=post&act=index");

    }
}

?>