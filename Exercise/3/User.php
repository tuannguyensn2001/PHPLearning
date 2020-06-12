<?php


class User
{
private $name;
private $email;
private $password;
private $avatar;
public function __construct($name,$email,$password,$avatar)
{
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
    $this->avatar=$avatar;
}
public function printInformation(){
    echo "Ten cua user la :".$this->name;
    echo "<br>";
    echo "Email cua user la :".$this->email;
    echo "<br>";
    echo "Mat khau cua user la :".$this->password;
    echo "<br>";
    echo "Avatar cua user la :";
    echo "<img src=$this->avatar>";
}
}