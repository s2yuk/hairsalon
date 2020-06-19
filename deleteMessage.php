<?php 
include 'hairsalonAction.php';
$contactID = $_GET['contact_id'];

// echo $contactID;
$Hairsalon->deleteMessage($contactID);


?>