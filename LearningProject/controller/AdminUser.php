<?php


class AdminUser extends  Controller
{
    var $user,$course;
    var $data;
    public function __construct()
    {
        $this->user=$this->model("AdminUserModel");
        $this->course=$this->model("AdminCourseModel");
        $this->data['listUser']=$this->user->getUser();
        $this->data['listCourse']=$this->course->getCourseActive();
    }

    public function viewUser()
    {


        $this->view("Admin/UserManager/viewUser",$this->data);
    }
    public function editUser()
    {
        echo "<pre>";
        print_r($_POST);
    }
    public function showUser()
    {
        $id=$_POST['id'];
        $data=$this->user->getUser($id)[0];
        echo json_encode($data);
    }
}