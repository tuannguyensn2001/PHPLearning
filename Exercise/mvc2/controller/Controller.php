<?php


class Controller
{
   public function views($view,$data=""){
       require_once ("./views/".$view.".php");

   }
   public function model($model){
       require_once ("./model/".$model.".php");
       $model = new $model;
       return $model;
   }

}