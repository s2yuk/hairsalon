
<?php

include 'HairsalonAction.php';
$loginid = $_SESSION['loginid'];

$Hairsalon->deleteProfile($loginid);

?>