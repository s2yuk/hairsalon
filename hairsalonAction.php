<?php
include 'classes/Hairsalon.php';

$Hairsalon= new Hairsalon;

// register.php
if(isset($_POST['register'])){
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $gender = $_POST['gender'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Hairsalon ->registerUser($email,$password,$fname,$lname,$gender,$telephone);


}

// login.php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Hairsalon->login($email,$password);

}


// testimonial.php
if(isset($_POST['review'])){
    $nickname=$_POST['nickname'];
    $date=$_POST['date'];
    $rating=$_POST['rating'];
    $comment=$_POST['comment'];

    $photoName = $_FILES['photo']['name'];
    $loginid=$_SESSION['loginid'];
    
    $Hairsalon->review($nickname,$date,$rating,$comment,$photoName,$loginid);
}


// booking2.php




// if(isset($_POST['order1'])){
//     $order1=$_POST['order1'];
//     $order2=$_POST['order2'];


//     $Hairsalon->getOrder($order1,$order2);

    
// }




// ----------------------------------------------------------------------------
// For admin

// admin.php

if(isset($_POST['submit'])){
    $news= $_POST['news'];
    $date= $_POST['date'];

    $Hairsalon->addNews($news,$date);
}

// add catalog
if(isset($_POST['upload'])){
    $c_photo=$_POST['catalog_photo'];
    $c_comment=$_POST['catalog_comment'];
    $photo_stylist = $_POST['photo_stylist'];

    uploadCatalog($c_photo, $c_comment,$photo_stylist);

}






// addStaff.php
if(isset($_POST['input'])){
    $s_name=$_POST['staff_name'];
    $position =$_POST['position'];
    $skill = $_POST['skill'];
    $s_gender = $_POST['staff_gender'];
    $staffPhoto = $_FILES['s_photo']['name'];
    $s_bio = $_POST['bio'];

    $Hairsalon->addStaff($s_name,$position,$s_gender,$staffPhoto,$s_bio);

    $skillCount = count($skill);

    // print_r($skill);
    // echo $skillCount;

    for($x = 0; $x< $skillCount; $x++){
        $Hairsalon->addstaffskills($skill[$x]);
    }

    header('location:addStaff.php');

}

// addService.php
if(isset($_POST['menuInput'])){
$menuName= $_POST['menuName'];
$menuPrice=$_POST['menuPrice'];

$Hairsalon->addServiceMenu($menuName,$menuPrice);

}


// editStaff.php

if(isset($_POST['editStaff'])){
    $s_name=$_POST['staff_name'];
    $position =$_POST['position'];
    $skill = $_POST['skill'];
    $s_gender = $_POST['staff_gender'];
    $staffPhoto = $_FILES['s_photo']['name'];
    $s_bio = $_POST['bio'];

    $Hairsalon->editStaff($staffID,$s_name,$position,$s_gender,$staffPhoto,$s_bio);

    // $skillCount = count($skill);

    // // print_r($skill);
    // // echo $skillCount;

    // for($x = 0; $x< $skillCount; $x++){
    //     $Hairsalon->addstaffskills($skill[$x]);
    // }

    // header('location:addStaff.php');

}



?>




