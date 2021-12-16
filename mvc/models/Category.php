<?php
require_once('models/Query.php');
  class Category extends Query
  {
      public $table = 'categories';
      public function getList()
      {
        // echo 'Get List';
        $categories = $this -> select ($this -> table, ['id', 'name', 'description', 'thumbnail', 'parent_id', 'created_at']);
        return $categories;
      }
      public function create($data) {
          $status = $this->insert($this->table, $data);
      } 
  };
  
?>