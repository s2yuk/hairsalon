<?php 
include 'hairsalonAction.php';
$reserveID = $_GET['reserve_id'];

// echo $catalogID;
$Hairsalon->deleteReserve($reserveID);


?>