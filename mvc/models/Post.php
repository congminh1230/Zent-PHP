<?php
require_once('models/Query.php');
  class Post extends Query
  {
      public $table = 'posts';
      public function getList()
      {
        $posts = $this -> select ($this -> table, ['id', 'title', 'description', 'thumbnail', 'content','category_id', 'created_at']);
        return $posts;
      }
      public function create($data) {
        $status = $this->insert($this->table, $data);
    } 
  }
?>