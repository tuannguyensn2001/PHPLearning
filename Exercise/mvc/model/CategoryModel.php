<?php


class CategoryModel extends Database
{
  public function __construct()
  {
      parent::__construct();
  }

    public function getCategory($id='')
    {
        if (empty($id)){
            $query = "SELECT * FROM categories";
        } else{
            $query = "SELECT * FROM categories WHERE id=$id";
        }


       $array=$this->getData($query);
        return $array;
    }
    public function addCategory($data){

        $query="INSERT INTO categories (title) VALUES ('".$data."')";

        $result=$this->conn->query($query);



    }
    public function  deleteCategory($id){
      $this->delete($id,"categories");
    }
    public function editCategory($id,$title){
      $query="UPDATE categories SET title='".$title."' WHERE id=$id";
      $result=$this->conn->query($query);
    }



}