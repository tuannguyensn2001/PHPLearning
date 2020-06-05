<?php
session_start();
$check=[];
foreach($_SESSION['cart'] as $key=>$index){
    if ($index['count']==0) {
        array_push($check, $key);
    }
}
foreach($check as $i){
    unset($_SESSION['cart'][$i]);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<div class="container">
    <h4 style="text-align: center">GIỎ HÀNG</h4>
    <a href="./index.php" class="btn btn-primary">Mua hàng tiếp</a>
    <hr>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col" style="text-align: -webkit-left">Số lượng</th>
            <th scope="col">Đơn giá</th>

            <th scope="col">Thời gian cập nhật</th>

            <th scope="col" align="right">Thành tiền</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (isset($_SESSION['cart'])){
            $totalNumber=0;
            foreach($_SESSION['cart'] as $key => $value){
                $totalNumber+=$value['value'];

                ?>
                <tr id="tr-<?=$key?>">
                    <th scope="row"><?=$key?></th>
                    <td><?=$value['name']?></td>
                    <td>
                        <button class="btn btn-primary add" id="<?=$key?>"><i class="fa fa-plus"></i></button>
                        <span class="count-<?=$key?>"><?=$value['count']?>
                        </span>
                        <button class="btn btn-warning delete" id="<?=$key?>"><i class="fa fa-minus"></i></button>
                    </td>
                    <td><?=number_format($value['price'], 0, ',', '.')?></td>

                    <td class="timeUpdate-<?=$key?>"><?=$value['timeUpdate']?></td>

                    <td class="value-<?=$key?>" align="right"><?=number_format($value['value'], 0, ',', '.')?></td>
                </tr>
            <?php }


            ?>
            <tr>
                <th colspan="5"><p style="text-align: center">Tổng số tiền</p></th>
                <th class="totalNumber" style="text-align:right"><?=number_format($totalNumber, 0, ',', '.')?></th>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $(".add").click(function () {
            var id = $(this).attr("id");
            console.log(id);

            $.ajax({
                type: "GET",
                url: "add.php",
                data: {
                    id,
                },
                success: function (data) {

                    var object = JSON.parse(data);
                    console.log(object);
                    $(".count-" + id).html(object['count']);
                    $(".value-" + id).html(object['value']);
                    $(".totalNumber").html(object['total']);
                    $(".timeUpdate-"+id).html(object['timeUpdate']);
                },
                error: function () {
                    console.log("no");
                }

            })
        })
        $(".delete").click(function () {
            var id = $(this).attr("id");


            $.ajax({
                type: "GET",
                url: "delete.php",
                data: {
                    id,
                },
                success: function (data) {

                    var object = JSON.parse(data);

                    if (object['count'] > 0) {
                        $(".count-" + id).html(object['count']);
                        $(".value-" + id).html(object['value']);

                        $(".timeUpdate-"+id).html(object['timeUpdate']);


                    } else{
                        document.getElementById("tr-"+id).style.display="none";

                    }
                    $(".totalNumber").html(object['total']);

                },
                error: function () {
                    console.log("no");
                }

            })

        })
    })
</script>

</body>
</html>