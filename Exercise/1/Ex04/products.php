<?php
function convertVND($a,$b){
    $currency=pow(10,$b);

    return $a*$currency;
}
$products=array(
    "SP1" => array(
        "name"=>"Realme 6",
        "price"=>convertVND(6,6),
    ),
    "SP2" => array(
        "name"=>"Samsung Galaxy Note 10",
        "price"=>convertVND(20,6),
    ),
    "SP3" => array(
        "name"=>"Iphone XR",
        "price"=>convertVND(15,6),

    )

);



?>