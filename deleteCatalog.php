<?php 
include 'hairsalonAction.php';
$catalogID = $_GET['catalog_id'];

// echo $catalogID;
$Hairsalon->deleteCatalog($catalogID);


?>