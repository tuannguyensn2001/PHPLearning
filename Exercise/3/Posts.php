<?php


class Posts
{
    private $title;
    private $link;
    private $description;
    private $content;
    public function __construct($title,$link,$description,$content){
        $this->title=$title;
        $this->link=$link;
        $this->description=$description;
        $this->content=$content;
    }
    public function printInformation(){
        echo "Tieu de bai viet la :".$this->title;
        echo "<br>";
        echo "Duong dan bai viet la :".$this->link;
        echo "<br>";
        echo "Mo ta bai viet la :".$this->description;
        echo "<br>";
        echo "Noi dung bai viet la :".$this->content;
    }


}

