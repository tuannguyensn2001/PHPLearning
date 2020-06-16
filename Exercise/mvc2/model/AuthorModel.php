<?php


class AuthorModel extends Database
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getAuthor($id='')
    {
        if (empty($id)){
            $query = "SELECT * FROM authors";
        } else{
            $query = "SELECT * FROM authors WHERE id=$id";
        }


        $array=$this->getData($query);
        return $array;
    }
}