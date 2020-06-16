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
elseif(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Hairsalon->login($email,$password);

}


// testimonial.php
elseif(isset($_POST['review'])){
    $nickname=$_POST['nickname'];
    $date=$_POST['date'];
    $rating=$_POST['rating'];
    $comment=$_POST['comment'];

    $photoName = $_FILES['photo']['name'];
    $loginid=$_SESSION['loginid'];
    
    $Hairsalon->review($nickname,$date,$rating,$comment,$photoName,$loginid);
}
elseif(isset($_POST['delete_testimonial'])){
    $review_id = $_POST['review_id'];

    $Hairsalon->deleteReview($review_id);
}


// contactpage.php
elseif(isset($_POST['sent'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $service =$_POST['service'];
    $stylist = $_POST['stylist'];
    $comment = $_POST['comment'];
    $iphoto = $_FILES['photo']['name'];
    $c_id = $_SESSION['loginid'];

    $Hairsalon->contact($name,$email,$gender,$service,$stylist,$comment,$iphoto,$c_id);
}
// msg_detail.php
elseif(isset($_POST['reply'])){
    $c_id = $_POST['c_id'];
    $text = $_POST['text'];
    $file = $_FILES['file']['name'];
    $user_id = $_SESSION['loginid'];

    $Hairsalon->msg_reply($c_id,$text,$file,$user_id);
}







// ----------------------------------------------------------------------------
// For admin

// admin.php

elseif(isset($_POST['submit'])){
    $news= $_POST['news'];
    $date= $_POST['date'];

    $Hairsalon->addNews($news,$date);
}

// addCatalog.php
elseif(isset($_POST['upload'])){
    $c_photo=$_FILES['catalog_photo']['name'];
    $c_comment=$_POST['catalog_comment'];
    $photo_stylist = $_POST['photo_stylist'];

    $Hairsalon->uploadCatalog($c_photo, $c_comment,$photo_stylist);

}






// addStaff.php
elseif(isset($_POST['input'])){
    $s_name=$_POST['staff_name'];
    $position =$_POST['position'];
    $s_gender = $_POST['staff_gender'];
    $staffPhoto = $_FILES['s_photo']['name'];
    $s_bio = $_POST['bio'];

    $Hairsalon->addStaff($s_name,$position,$s_gender,$staffPhoto,$s_bio);

    header('location:addStaff.php');

}
elseif(isset($_POST['delete_staff'])){
    $staffID=$_POST['staff_id'];

    $Hairsalon->deleteStaff($staffID);
}


// addService.php
elseif(isset($_POST['menuInput'])){
    $menuName= $_POST['menuName'];
    $menuPrice=$_POST['menuPrice'];

    $Hairsalon->addServiceMenu($menuName,$menuPrice);

}
elseif(isset($_POST['couponInput'])){
    $couponName = $_POST['couponName'];
    $couponPrice = $_POST['couponPrice'];

    $Hairsalon->addCouponMenu($couponName,$couponPrice);

}
// editService.php
elseif(isset($_POST['editService'])){
    $serviceID=$_POST['serviceID'];
    $menuName= $_POST['service_name'];
    $menuPrice=$_POST['service_price'];

    $Hairsalon->editServiceMenu($serviceID,$menuName,$menuPrice);

}
// editCoupon.php
elseif(isset($_POST['editCoupon'])){
    $couponID=$_POST['couponID'];
    $couponName= $_POST['coupon_name'];
    $couponPrice=$_POST['coupon_price'];

    $Hairsalon->editCouponMenu($couponID,$couponName,$couponPrice);

}



// editStaff.php
elseif(isset($_POST['editStaff'])){
    $staffID = $_POST['staff_id'];
    $s_name=$_POST['staff_name'];
    $position =$_POST['position'];
    $s_gender = $_POST['staff_gender'];
    $staffPhoto = $_FILES['s_photo']['name'];
    $s_bio = $_POST['bio'];

    $Hairsalon->editStaff($s_name,$position,$s_gender,$staffPhoto,$s_bio,$staffID);

}


elseif(isset($_POST['editCatalog'])){
    $c_photo=$_FILES['catalog_photo']['name'];
    $c_comment=$_POST['catalog_comment'];
    $p_stylist = $_POST['photo_stylist'];
    $catalogID = $_POST['catalog_id'];

$Hairsalon->editCatalog($c_photo,$c_comment,$p_stylist,$catalogID);
}

// add catalog comments
elseif(isset($_POST['send'])){
    $comment_content = $_POST['content'];
    $user = $_POST['fname'];
    $loginid =$_SESSION['loginid'];
    $id  = $_POST['catalog_id'];

    // $newComment = $this->conn->mysqli_real_escape_string($comment_content);

    // echo $newComment;

    // echo $comment_content;
    // echo "<br>";
    // echo $user;
    // echo "<br>";
    // echo $loginid ;
    // echo "<br>";
    // echo $id;
    
    $Hairsalon->addComment($comment_content,$user,$id,$loginid);

}
// delete catalog comment
elseif(isset($_POST['delete_comment'])){
    $comment_id = $_POST['comment_id'];

    $Hairsalon->deleteCatalogComment($comment_id);
}

    // booking.php
elseif(isset($_POST['addCoupon'])){
    $_SESSION['coupon_id']=$_POST['coupon'];
    $_SESSION['coupon_price'] = $_POST['coupon_price'];

    // echo  $_SESSION['coupon'];
    // echo "<br>";
    // echo   $_SESSION['coupon_price'];
    if(!empty($_SESSION['coupon_id']) AND !empty($_SESSION['coupon_price'])){
        header('location:booking2.php');
    }
  }
// elseif(isset($_POST['addServiceMenuNow'])){
//     $_SESSION['service_id']=$_POST['menu_id'];
//     $_SESSION['price'] = $_POST['menu_price'];

//     // echo  $_SESSION['service_id'];
//     // echo "<br>";
//     // echo   $_SESSION['price'];
//     if(!empty($_SESSION['service_id']) AND !empty($_SESSION['price'])){
//         header('location:booking2.php');
//     }
// }

// booking2.php
elseif(isset($_POST['addBooking2'])){

    $_SESSION['booking2_id']=$_POST['booking2_id'];
    $_SESSION['booking2_price'] = $_POST['booking2_price'];

    // echo  $_SESSION['booking2_id'];
    // echo "<br>";
    // echo   $_SESSION['booking2_price'];
    if(!empty($_SESSION['booking2_id']) AND !empty($_SESSION['booking2_price'])){
        header('location:booking3.php');
    }


    // booking3.php
  }elseif(isset($_POST['addBooking3'])){
      $_SESSION['select_stylist']=$_POST['selectStylist'];

    //   echo $_SESSION['select_stylist'];

    if(!empty($_SESSION['select_stylist'])){
        header('location:booking4.php');
    }


    // booking4.php
  }elseif(isset($_POST['submit_date'])){
    
    $_SESSION['selected_date']=$_POST['select_date'];
    $_SESSION['hour']=$_POST['hour'];

    // echo $_SESSION['selected_date'];

    if(!empty($_SESSION['selected_date']) AND !empty($_SESSION['hour'])){

        if(!empty($_SESSION['loginid'])){
            header('location:booking5.php');
        
        }else{
            header('location:guest.php');
        }

    
    }

// booking2
}elseif(isset($_POST['reselect'])){
 
    unset($_SESSION['service_id']);
    unset($_SESSION['price']);

    unset($_SESSION['coupon_id']);
    unset($_SESSION['coupon_price']);

    header('location:booking.php');
 
    // booking3
}elseif(isset($_POST['reselect3'])){
    unset($_SESSION['booking2_id']);
    unset($_SESSION['booking2_price']);
 
    header('location:booking2.php');

}
    // booking4
elseif(isset($_POST['reselect4'])){
    unset($_SESSION['select_stylist']);

    header('location:booking3.php');

}
    // booking5
elseif(isset($_POST['reselect5'])){
    unset($_SESSION['selected_date']);
  
    header('location:booking4.php');

}    
elseif(isset($_POST['reserve'])){
    $customerID = $_SESSION['loginid'];
    $fname=$_POST['fname'];
    $lname = $_POST['lname'];
    $date = $_SESSION['selected_date'];
    $hour=$_SESSION['hour'];
    $order =$_POST['order'];
    $addMenu=$_POST['addMenu'];
    $totalPrice = $_POST['price'];
    $nomination = $_POST['nomination'];

    $Hairsalon->addReservation($date,$hour,$fname,$lname,$customerID,$order,$addMenu,$nomination,$totalPrice);
    
}
// reserve_by_admin.php
elseif(isset($_POST['reserve_by_admin'])){
    $_SESSION['date']=$_POST['date'];
    $_SESSION['hour']=$_POST['hour'];
    $_SESSION['fname']=$_POST['fname'];
    $_SESSION['lname']=$_POST['lname'];
    $_SESSION['c_id']=$_POST['c_id'];
    $_SESSION['coupon_id']=$_POST['order'];
    $_SESSION['service_id']=$_POST['addMenu'];
    $_SESSION['nomination']=$_POST['nomination'];

    header("location:reserve_by_admin2.php");

}
// reserve_by_admin2.php confirm
elseif(isset($_POST['reserve_by_admin2'])){
    $date=$_SESSION['date'];
    $hour = $_SESSION['hour'];
    $fname=$_SESSION['fname'];
    $lname=$_SESSION['lname'];
    $c_id=$_SESSION['c_id'];
    $coupon_id=$_SESSION['coupon_id'];
    $service_id=$_SESSION['service_id'];
    $nomination=$_SESSION['nomination'];
    $totalPrice=$_POST['total'];
    $Hairsalon->addReserve_by_admin($date,$hour,$fname,$lname,$c_id,$coupon_id,$service_id,$nomination,$totalPrice);

}
elseif(isset($_POST['editReserve'])){
    $reserve_id = $_POST['reserve_id'];

    $_SESSION['n_date'] =$_POST['n_date'];
    $_SESSION['n_hour'] = $_POST['hour'];
    $_SESSION['newCoupon'] = $_POST['newCoupon'];
    $_SESSION['newAddMenu'] = $_POST['newAddMenu'];
    $_SESSION['n_nomination'] = $_POST['n_nomination'];
    
    header("location:editReserve2.php?reserve_id=$reserve_id");
}    
// confirm
elseif(isset($_POST['editReserve2'])){
    $reserve_id = $_POST['reserve_id'];

        $new_date =$_SESSION['n_date'];
        $new_hour = $_SESSION['n_hour'];
        $newCoupon = $_SESSION['newCoupon'];
        $newAddMenu = $_SESSION['newAddMenu'];
        $new_nomination = $_SESSION['n_nomination'];
        $totalPrice = $_POST['total'];

        $Hairsalon->updateReservation($reserve_id,$new_date,$new_hour,$newCoupon,$newAddMenu,$new_nomination,$totalPrice);
    
}

// search for user
elseif(isset($_POST['search'])){
    $keyword = $_POST['keyword'];

    $Hairsalon->searchUser($keyword);
}

elseif(isset($_POST['editUserBio'])){
    $c_id =$_POST['c_id'];
    $user_bio = $_POST['bio'];

    $Hairsalon->addUserBio($c_id,$user_bio);
}










?>




