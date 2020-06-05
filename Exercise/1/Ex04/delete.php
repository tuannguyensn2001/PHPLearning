<?php
session_start();
//$id=json_encode($_GET['id']);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$id=$_GET['id'];

    $_SESSION['cart'][$id]['count']--;

    $_SESSION['cart'][$id]['value'] = $_SESSION['cart'][$id]['count'] * $_SESSION['cart'][$id]['price'];
    $totalNumber = 0;
$_SESSION['cart'][$id]['timeUpdate']=date('d/m/Y - H:i:s');

    foreach ($_SESSION['cart'] as $index) {
        $totalNumber += $index['value'];
    }
    $totalNumber = number_format($totalNumber, 0, ',', '.');
    $a = [
        "key" => $id,
        "count" => $_SESSION['cart'][$id]['count'],
        "value" => number_format($_SESSION['cart'][$id]['value'], 0, ',', '.'),
        "total" => $totalNumber,
        "timeUpdate"=>$_SESSION['cart'][$id]['timeUpdate']=date('d/m/Y - H:i:s'),
    ];

//echo $_SESSION['cart'][$id]['count'];
    echo json_encode($a);

    if($_SESSION['cart'][$id]['count']==0){
        unset($_SESSION['cart'][$id]);
    }
