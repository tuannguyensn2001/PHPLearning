<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once ('./products.php');

session_start();
if (!isset($_SESSION['cart'])){
    $_SESSION['cart']=array();
}
$id=$_GET['id'];
foreach ($products as $key=>$value){
    if ($id == $key){
        $products_Now=$products[$key];
    }
}
$products_Now['count']=1;
$products_Now['value']=$products_Now['count']*$products_Now['price'];
$products_Now['timeUpdate']=date('d/m/Y - H:i:s');



if (array_key_exists($id, $_SESSION['cart'])) {
    $_SESSION['cart'][$id]['count']++;
    $_SESSION['cart'][$id]['value']=   $_SESSION['cart'][$id]['count']*$_SESSION['cart'][$id]['price'];
    $_SESSION['cart'][$id]['timeUpdate']=date('d/m/Y - H:i:s');
}
else {
    $_SESSION['cart'][$id] = $products_Now;

}

//if (isset($_SESSION['cart'][$id])){

//
//}
header('Location: ./cartViews.php');


?>