<?php 
include 'hairsalonAction.php';
$serviceID = $_GET['service_id'];

// echo $serviceID;
$Hairsalon->deleteService($serviceID);


?>