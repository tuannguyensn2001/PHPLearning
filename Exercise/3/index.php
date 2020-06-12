<?php
require_once ('./Category.php');
require_once ('./Posts.php');
require_once ('./User.php');


$post=new Posts("21 thành viên Hội đồng bầu cử Quốc gia ra mắt Quốc hội","https://dantri.com.vn/xa-hoi/21-thanh-vien-hoi-dong-bau-cu-quoc-gia-ra-mat-quoc-hoi-20200612110750085.htm","4 Phó Chủ tịch, 16 Ủy viên Hội đồng bầu cử Quốc gia được Chủ tịch Quốc hội Nguyễn Thị Kim Ngân giới thiệu đều trúng cử. Hội đồng 21 người chính thức ra mắt Quốc hội sáng nay, 12/6","Sáng 12/6, tiếp tục nội dung công tác nhân sự, Quốc hội bỏ phiếu bầu các Phó Chủ tịch, Ủy viên Hội đồng bầu cử quốc gia dựa trên danh sách được Chủ tịch Quốc hội Nguyễn Thị Kim Ngân – Chủ tịch Hội đồng giới thiệu chiều qua, 11/6.");
$post->printInformation();

echo "<hr>";
$category = new Category("Thể thao","https://dantri.com.vn/giao-duc-khuyen-hoc.htm","Danh mục","https://icdn.dantri.com.vn/zoom/390_300//2020/06/12/hinh-22-1591937030052.jpg","Thông tin về thể thao");
$category->printInformation();


echo "<hr>";
$user=new User("Tuấn","nguyenvantuan_t64@hus.edu.vn","123456","https://scontent.fhan5-3.fna.fbcdn.net/v/t1.0-9/90934529_2532686776998933_7203057822118969344_n.jpg?_nc_cat=111&_nc_sid=174925&_nc_ohc=aS_A7IsV-NcAX8wMdXc&_nc_ht=scontent.fhan5-3.fna&oh=c916ea2fd5d4de656d20c79c71784eed&oe=5F0A5EFF");
$user->printInformation();