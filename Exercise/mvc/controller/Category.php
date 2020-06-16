<?php

//require_once ('./model/CategoryModel.php');
class Category extends  Controller
{
    public function __construct()
    {

    }

    public function index(){

        $category = $this->model("CategoryModel");
        $data=$category->getCategory();
    $this->views("category",$data);

}
    public function addCategory(){
        $this->views("addCategory");
    }
    public function addCategoryAction(){
       $category_title = $_POST['category'];

       $category = $this->model("CategoryModel");
       $category->addCategory($category_title);
       header("Location: ?controller=Category ");

    }
    public function deleteCategoryAction(){

        $category = $this->model("CategoryModel");
        $category->deleteCategory($_GET['id']);
        header('Location: ?controller=Category');
    }
    public function editCategory(){
        $id=$_GET['id'];
        $category=$this->model("CategoryModel");
        $data=$category->getCategory($id)[0];

        $this->views("editCategory",$data);
    }
    public function editCategoryAction(){
        $id=$_POST['id'];
        $title=$_POST['category'];
        $category=$this->model("CategoryModel");
        $category->editCategory($id,$title);
        header('Location: ?controller=Category');
       


    }




}