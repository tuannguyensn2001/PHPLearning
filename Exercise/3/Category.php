<?php


class Category
{
private $name;
private $link;
private $parentDir;
private $thumbnail;
private $description;
public function __construct($name,$link,$parentDir,$thumbnail,$description)
{
    $this->name=$name;
    $this->link=$link;
    $this->parentDir=$parentDir;
    $this->thumbnail=$thumbnail;
    $this->description=$description;
}
public function printInformation(){
    echo "Ten danh muc la :".$this->name;
    echo "<br>";
    echo "Ten duong dan la :".$this->link;
    echo "<br>";
    echo "Ten danh muc cha la :".$this->parentDir;
    echo "<br>";
    echo "Anh hien thi la :";
    echo "<br>";
    echo "<img src=$this->thumbnail width='200' height='200'>";
    echo "<br>";
    echo "Mo ta danh muc la :".$this->description;
}
}



?>



