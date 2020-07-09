<?php 
include 'hairsalonAction.php';
$memoID = $_GET['id'];
$c_id=$_GET['c_id'];

// echo $serviceID;
$Hairsalon->deleteMemo($memoID,$c_id);


?>