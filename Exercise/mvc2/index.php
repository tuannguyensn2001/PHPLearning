<?php

$controller="Author";
$action="index";
include_once ("./Controller/Controller.php");
include_once ("./model/Database.php");

if (isset($_GET['controller'])){
    if (file_exists("./controller/".$_GET['controller'].".php")){
        $controller=$_GET['controller'];
    }
}
require_once ("./controller/".$controller.".php");

$controller = new $controller;
if (isset($_GET['action'])){
    if (method_exists($controller,$_GET['action'])){
        $action=$_GET['action'];
    }
}

call_user_func_array(array($controller,$action),array());



