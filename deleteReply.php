<?php 
include 'hairsalonAction.php';
$replyID = $_GET['r_id'];
$contactID = $_GET['c_id'];

// echo $contactID;
$Hairsalon->deleteReplyByUser($replyID,$contactID);


?>