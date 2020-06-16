<?php


class Author extends Controller
{
    private $authorModel;
    public function __construct()
    {
        $this->authorModel=$this->model("AuthorModel");
    }

    public function index()
{

    $data=$this->authorModel->getAuthor();

    $this->views("Author",$data);
}
public function getDetails()
{
    $id=$_GET['id'];
    $data=$this->authorModel->getAuthor($id)[0];
    foreach($data as $key => $value){
        echo $key.": ".$value;
        echo "<br>";
    }
}
}