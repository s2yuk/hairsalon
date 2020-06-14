<?php 
include 'hairsalonAction.php';
$couponID = $_GET['coupon_id'];

// echo $couponID;
$Hairsalon->deleteCoupon($couponID);


?>