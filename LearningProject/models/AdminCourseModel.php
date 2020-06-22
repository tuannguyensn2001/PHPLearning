<?php


class AdminCourseModel extends Model
{
    public function getCourse($id='')
    {
        if (empty($id)){
        $query = "SELECT c.*,cate.`name` as category
FROM `course` c 
LEFT JOIN category cate ON c.category_id=cate.id"; } else{
            $query = "SELECT c.*,cate.`name` as category
FROM `course` c
LEFT JOIN category cate ON c.category_id=cate.id WHERE c.id=$id";
        }
        return $this->getData($query);
    }
    public function getCourseActive()
    {
        $query="SELECT id,name FROM course WHERE is_active =1";
        return $this->getData($query);
    }
    public function editCourse($data)
    {

        echo "<pre>";
       if (isset($data['typethumbnail'])){
           $thumbnail=explode(".",$data['typethumbnail']['name'])[1];
           $target_dir="views/Outside/img/course/".$data['id']."/thumbnail.".$thumbnail;
           if(file_exists($target_dir))
           {
               chmod($target_dir,0755);
               unlink($target_dir);
           }
        $filenames= $data['typethumbnail']['tmp_name'];
        echo $target_dir;

           $status= move_uploaded_file($filenames,$target_dir);








           $data['typethumbnail']=$thumbnail;


       }



//        header("Location: .././developer.jpg");



       $this->update($data,"course");

    }
    public function createCourse()
    {
        $query="INSERT INTO course () VALUES ()";
        $this->doQuery($query);
        $query1="SELECT id FROM course ORDER BY id DESC LIMIT 1";
        $newCourse=$this->getData($query1)[0]['id'];
        echo $newCourse;
        $query2="SELECT id,mycourse FROM users ";
        $userCourseJSON=$this->getData($query2);
        foreach($userCourseJSON as $value){
            echo "<pre>";
            $value['mycourse']=json_decode($value['mycourse'],true);

            $value['mycourse'][$newCourse]=0;
            $value['mycourse']=json_encode($value['mycourse']);
            $this->update($value,"users");
        }






        die;



    }

}