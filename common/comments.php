<?php
class Comment{
    private $db;
    public function __construct(PDO $db) {
        $this->db=$db;
    }
    public function post_comment($data){
        
    }
    public function delete_comment($id){
        
    }
    private function display($row){
        
    }
    public function view_comments($post){
        
    }
}