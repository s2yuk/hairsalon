<!-- function page -->
<?php
include 'connection.php';

class Hairsalon extends Connection{

// register 
function registerUser($email,$password,$fname,$lname,$gender,$telephone){
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = $this->conn->query($sql);

    if($result->num_rows == NULL){
        $sql1 = "INSERT INTO login(email,password) VALUES('$email','$password')";
        $result1 = $this->conn->query($sql1);
    
        if($result1 ==TRUE){
            $loginid = $this->conn->insert_id;
            $sql2 = "INSERT INTO client(fname,lname,c_gender,telephone,login_id) VALUES('$fname','$lname','$gender','$telephone','$loginid')";
    
            $result2= $this->conn->query($sql2);
    
                if($result2==FALSE){
                    echo "insert into client failed";
                }else{
                    header('location:login.php');
                }
    
        }else{
            echo "insert into login table is failed";
    
        }
    }else{
        die('You have already our account. Did you forget your password ?');
    }
}

// login
function login($email,$password){
    $sql="SELECT * FROM login WHERE email ='$email' AND password ='$password'";
    $result = $this->conn->query($sql);

    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        $_SESSION['loginid'] = $row['login_id'];

        if($row['status']=='A'){
            header('location:admin.php');
        }else{

            header('location:dashboard.php');

        }

    }else{
        echo "user does not exist! Please register first... ";
        
    }
}


// userMenu.php
    //client table 
function getOneUser($loginid){
    $sql = "SELECT * FROM client WHERE login_id='$loginid' ";
    $result = $this->conn->query($sql);
    if($result == FALSE){
        die('can not get one user'.$this->conn->connect_error);

    }else{
        return $result ->fetch_assoc();
    }
}


// testimonial.php
function review($nickname,$date,$rating,$comment,$photoName,$loginid){
    $target_dir ='upload/user/testimonial/';
    $target_file= $target_dir.basename($photoName);
    
    $sql="INSERT INTO review(nickname,date,rating,comment,photo,login_id) VALUES('$nickname','$date','$rating','$comment','$photoName','$loginid')";
    $result = $this->conn->query($sql);

    if($result==FALSE){
        echo "review error";
    }else{
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
        header('location:testimonial.php');

    }
}
function displayReviewList(){
    $sql="SELECT * FROM review ORDER BY review_id DESC";
    $result=$this->conn->query($sql);

    if($result->num_rows>0){
        while($rows = $result->fetch_assoc()){
            $row[]=$rows;

        }return $row;
    }else{
        return FALSE;

    }
}
function deleteReview($review_id){
    $sql="DELETE FROM review WHERE review_id = '$review_id'";
    $result=$this->conn->query($sql);

    if($result == FALSE){
        die('deleteing review failed'.$this->conn->connect_error);
    }else{
        header('location:hairCatalog.php');

    }
}

//hairCatalog.php reaction of photos
function addComment($comment,$comment_user,$catalogID,$userID){
    

    if(is_null($userID)){
       header('location:guest.php');

    }else{

    $sql = "INSERT INTO catalog_comment(comment,user,catalog_id,user_id)VALUES('$comment','$comment_user','$catalogID','$userID')";
        $result = $this->conn->query($sql);

        if($result==FALSE){
            die($this->conn->error);
        }else{
            header('location:hairCatalog.php');
        }
    }

    // $result = $this->conn->query("INSERT INTO catalog_comment(`comment`, `user`, `catalog_id`, `user_id`)VALUES('$comment','$comment_user','$catalogID','$userID')");
    

}

function displayCatalogComment($catalogID){
    $sql="SELECT * FROM catalog_comment WHERE catalog_id ='$catalogID'";
    $result =$this->conn->query($sql);

    if($result->num_rows>0){
        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }return $row;
    }else{
        return FALSE;
    }
}
function deleteCatalogComment($comment_id){
    $sql="DELETE FROM catalog_comment WHERE comment_id ='$comment_id'";
    $result = $this->conn->query($sql);

    if($result ==FALSE){
        die('can not delete catalog comment'.$this->conn->connect_error);
    }else{
        header('location:hairCatalog.php');
    }

}


function contact($name,$email,$gender,$service,$stylist,$comment,$iphoto,$c_id){
    // ----------for mail ---------------------------------
    mb_language("ja");
    mb_internal_encoding("UTF-8");
    // 送信先
    $to = 'yuka.mtmt0328@gmail.com'; 
    // 件名
    $subject = "Message from Smile Contact Form";
    // 送信者アドレス
    $headers = "FROM: ".$email."\r\n";  
    // 本文
    $comment = str_replace("\n.", "\n..", $comment);
    $message = 
        "CLIENT ID : $c_id\r\n NAME : $name\r\n E-mail : $email\r\n GENDER : $gender\r\n SERVICE : $service\r\n STYLIST : $stylist\r\n COMMENT : $comment\r\n IMAGE : $iphoto\r\n";

    mb_send_mail($to, $subject, $message, $headers);


    //-----------for database--------------------------------
    $target_dir ='upload/user/msg/';
    $target_file= $target_dir.basename($iphoto);

    $sql="INSERT INTO contact(contact_name, contact_email, gender, service, stylist, comment, iphoto, c_id) VALUES('$name', '$email','$gender','$service','$stylist','$comment','$iphoto','$c_id')";
    $result = $this->conn->query($sql);

    if($result == FALSE){
        die($this->conn->error);
    }else{
        move_uploaded_file($_FILES['photo']['tmp_name'],$target_file);
        header('location:contact_send.php');
    }
}
function new_msg($email,$comment,$iphoto,$c_id){
    $sql1="SELECT client.fname, client.lname FROM login INNER JOIN client ON login.login_id=client.login_id WHERE email='$email';";
    $result1 = $this->conn->query($sql1);

    if($result1->num_rows==1){
        $rows=$result1->fetch_assoc();
        $username=$rows['fname']; 

        $target_dir='upload/user/msg/';
        $target_file=$target_dir.basename($iphoto);
        
        $sql2= "INSERT INTO contact(contact_name,contact_email,comment,iphoto,c_id) VALUES('$username','$email','$comment','$iphoto','$c_id')";
        $result2 = $this->conn->query($sql2);

        if($result2 == FALSE){
            die('cant insert contact'.$this->conn->error);
        }else{
            move_uploaded_file($_FILES['iphoto']['tmp_name'], $target_file);
            header('location:msg_list.php');
        }
    }else{
        die('cant get name'.$this->conn->error);
    }
}
// for admin
function displayContact(){
    $sql ="SELECT * FROM contact ORDER BY send_time DESC";
    $result = $this->conn->query($sql);

    if ($result->num_rows > 0){
        while ($rows = $result ->fetch_assoc()){
            $row[] = $rows;
        }return $row;
    }else{
        return FALSE;
    }
}
// for msg_detail.php
function getMsgID($msgID){
    $sql = "SELECT * FROM contact WHERE contact_id = $msgID";
    $result = $this->conn->query($sql);

    if ($result ==FALSE){
        die ('can not get contact_id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
}

// My page
// my reservation
function myReserve($loginid){
    $sql = "SELECT * FROM reservation WHERE c_id=$loginid ORDER BY reserve_id DESC";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        while($rows = $result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        echo "error ";
        return FALSE;
    }
}
// message
function getEmail($loginid){
    $sql="SELECT * FROM login WHERE login_id='$loginid'";
    $result= $this->conn->query($sql);

    if($result == FALSE){
        die('get email error'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }
}
function myMessage($email){
    $sql="SELECT * FROM contact WHERE contact_email='$email' ORDER BY contact_id DESC";
    $result = $this->conn->query($sql);

    if($result->num_rows> 0){
        while($rows = $result->fetch_assoc()){
            $row[]= $rows;
        }
        return $row;
    }else{
        return FALSE;
    }
}
function deleteMessage($contactID){
    $sql="DELETE FROM contact WHERE contact_id = '$contactID'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not delet message'.$this->conn->connect_error);
    }else{
        $loginid=$_SESSION['loginid'];
        $sql2 ="SELECT * FROM login WHERE login_id ='$loginid'";
        $result2 = $this->conn->query($sql2);

        if($result2->num_rows==1) {
            $row=$result2->fetch_assoc();

            if($row['status']=='A'){
                header('location:msg_list.php');
            }else{
                header('location:mypage.php');
            }
            
        }
    }
}
// msg_detail.php  for reply
function msg_reply($c_id,$text,$file,$user_id){
    $target_dir ='upload/user/msg/';
    $target_file= $target_dir.basename($file);

    $sql = "INSERT INTO msg_reply(c_id,text,file,user_id) VALUE('$c_id','$text','$file','$user_id')";
    $result = $this->conn->query($sql);

    if($result== FALSE){
        die('Reply submit error'.$this->conn->error);
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'],$target_file);

        $sql2 ="SELECT * FROM login WHERE login_id='$user_id'";
        $result2 = $this->conn->query($sql2);

        if($result2->num_rows == 1){
            $row = $result2->fetch_assoc();    
            if($row['status']=='A'){
                header("location:msg_detail.php?contact_id='$c_id'");
            }else{  
                header("location:message_detail.php?contact_id='$c_id'");
            }
        }else{
            die('heading error'.$this->conn->connect_error);
        }
    }
}
// disply reply
function displayReply($msgID){
    // $sql = "SELECT * FROM msg_reply WHERE c_id=$msgID";
    $sql="SELECT * FROM msg_reply INNER JOIN client ON msg_reply.user_id=client.c_id WHERE msg_reply.c_id=$msgID";
    $result = $this->conn->query($sql);

    if($result ->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $row[] =$rows; 
        }
        return $row;
    }else{
        return FALSE;
    }
}
function deleteReplyByUser($replyID,$contactID){
    $sql ="DELETE FROM msg_reply WHERE r_id='$replyID'";
    $result =$this->conn->query($sql);

    if($result==FALSE){
        die('delete memo failed'.$this->conn->connect_error);
    }else{
        header("location:message_detail.php?contact_id=$contactID");
    }
}
function deleteReplyByAdmin($replyID,$contactID){
    $sql ="DELETE FROM msg_reply WHERE r_id='$replyID'";
    $result =$this->conn->query($sql);

    if($result==FALSE){
        die('delete memo failed'.$this->conn->connect_error);
    }else{
        header("location:msg_detail.php?contact_id=$contactID");
    }
}


function countReply($c_id){
    $sql = "SELECT COUNT(*) FROM msg_reply WHERE c_id='$c_id";
    $result = $this->conn->query($sql);

    if($result->num_rows > 0 ){
        return $result->fetch_assoc();
    }else{
        echo "no reply";
    }
}
// edit profile
function editProfile($email, $password, $loginid, $fname, $lname, $c_gender, $telephone){
    $sql1 ="UPDATE login SET email = '$email', password = '$password' WHERE login_id ='$loginid'";
    $result1 = $this->conn->query($sql1);

    if($result1 == TRUE){
        $sql2 = "UPDATE client SET fname='$fname', lname='$lname', c_gender='$c_gender', telephone='$telephone' WHERE login_id ='$loginid'";
        $result2 = $this->conn->query($sql2);
        
        if($result2 == TRUE){
            echo "<script>alert('Success! プロフィールを変更しました。'); location.href ='profile.php';</script>";
            // header('location:profile.php');
        }else{
            die('error to update client data');
        }
    }else{
        die('error to update login data');
    }
}
// deleteProfile
function deleteProfile($loginid){

    $sql1 = "DELETE FROM login WHERE login_id = $loginid";
    $result1 = $this->conn->query($sql1);
    
    if($result1 == TRUE){
        // $sql2 = "DELETE FROM client WHERE login_id = $loginid";
        // $result2 = $this->conn->query($sql2);

        // if($result2 == TRUE){
        // }else{
        //     die('error to delete client data');
        // }
        session_destroy();
        header('location:dashboard.php');
    }else{
        die('error to delete login data');
    }
}



// ----------------------------------------------------------------------------
// For admin

// admin.php
function addNews($news,$date){
    $sql="INSERT INTO info(news,date) VALUES('$news','$date')";
    $result = $this->conn->query($sql);

    if($result==FALSE){
        die('insert into info failed'.$this->conn->connect_error);
    }else{
        header("location:dashboard.php");
    }
}

function displayNews($news,$date){
    $sql="SELECT * FROM info ORDER BY info_id DESC LIMIT 2" ;
    $result= $this->conn->query($sql);

    if($result->num_rows>0){
        $row=array();
        while($rows=$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
        
    }
}


//addStaff.php

function addStaff($s_name,$position,$s_gender,$staffPhoto,$s_bio){
    $target_dir ='upload/admin/';
    $target_file= $target_dir.basename($staffPhoto);
    
    $sql = "INSERT INTO `staff`(`staff_name`, `position`,`staff_gender`, `staff_photo`, `staff_bio`) VALUES ('$s_name','$position','$s_gender','$staffPhoto','$s_bio')";
    $result = $this->conn->query($sql);

    if($result == FALSE){
        die($this->conn->error);
    }else{
        move_uploaded_file($_FILES['s_photo']['tmp_name'],$target_file);
       
    }
}
function displayStaff(){
    $sql="SELECT * FROM staff ";   //ORDER BY staff_id DESC
    $result=$this->conn->query($sql);

    if($result->num_rows>0){
        // $row=array();
        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }
}


// editStaff.php
function getForEditstaff($staffID){
    $sql= "SELECT * FROM staff WHERE staff_id=$staffID";
    $result= $this->conn->query($sql);

        if($result ==FALSE){
            die('cannot get one staff_id'.$this->conn->connect_error);

        }else{
            return $result->fetch_assoc();
        }

}

function editStaff($s_name,$position,$s_gender,$staffPhoto,$s_bio,$staffID){
    $target_dir ='upload/admin/';
    $target_file= $target_dir.basename($staffPhoto);
    
    $sql = "UPDATE staff SET staff_name ='$s_name', position='$position',staff_gender='$s_gender', staff_photo= '$staffPhoto', staff_bio='$s_bio' WHERE staff_id='$staffID'";

    $result = $this->conn->query($sql);

    if($result == TRUE){
        move_uploaded_file($_FILES['s_photo']['tmp_name'],$target_file);
        header('location:addStaff.php');
       
    }else{
        die('update staff error'.$this->conn->error);       
    }
}
function deleteStaff($staffID){
    $sql="DELETE FROM staff WHERE staff_id = '$staffID'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not delet staff'.$this->conn->connect_error);
    }else{
        header('location:addStaff.php');
    }
}





// addService.php ->ok
function addServiceMenu($menuName,$menuPrice){
$sql="INSERT INTO service(service_name,price) VALUE('$menuName','$menuPrice')";
$result= $this->conn->query($sql);

        if($result ==FALSE){
            die($this->conn->connect_error);

        }else{
           
            header('location:addService.php');
        }
}
function displayServiceMenu(){
    $sql="SELECT * FROM service";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        // $row=array();
        while($rows =$result->fetch_assoc()){
            $row[]= $rows;    
        }
        return $row;

    }else{
        return FALSE;
    }
}
function getForEditService($serviceID){
    $sql="SELECT * FROM service WHERE service_id = '$serviceID'";
    $result =$this->conn->query($sql);

    if($result ==FALSE){
        die('cannot get one service_id'.$this->conn->connect_error);

    }else{
        return $result->fetch_assoc();
    }
}
function editServiceMenu($serviceID,$menuName,$menuPrice){
    $sql="UPDATE service SET service_name = '$menuName', price = '$menuPrice' WHERE service_id ='$serviceID'";
    
    $result =$this->conn->query($sql);

    if($result==FALSE){
        die('Update service is failed'.$this->conn->connect_error);
        
    }else{
        header('location:addService.php');
    }

}
function deleteService($serviceID){
    $sql="DELETE FROM service WHERE service_id = '$serviceID'";
    $result=$this->conn->query($sql);

    if($result == FALSE){
        die('deleteing service failed'.$this->conn->connect_error);
    }else{
        header('location:addService.php');

    }

}


// addCoupon.php
function addCouponMenu($couponName,$couponPrice){
    $sql="INSERT INTO coupon(coupon_name,coupon_price) VALUES('$couponName','$couponPrice')";
    $result = $this->conn->query($sql);

    if($result==FALSE){
        die('input coupon menu failed'.$this->conn->connect_error);
    }else{
        header('location:addService.php');
    }
    
}
function displayCouponMenu(){
    $sql="SELECT * FROM coupon";
    $result = $this->conn->query($sql);

    if($result ->num_rows>0){
        while($rows = $result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }
}
function getForEditCoupon($couponID){
    $sql="SELECT * FROM coupon WHERE coupon_id = '$couponID'";
    $result =$this->conn->query($sql);

    if($result ==FALSE){
        die('cannot get one coupon_id'.$this->conn->connect_error);

    }else{
        return $result->fetch_assoc();
    }
}
function editCouponMenu($couponID,$couponName,$couponPrice){
    $sql="UPDATE coupon SET coupon_name = '$couponName', coupon_price = '$couponPrice' WHERE coupon_id ='$couponID'";
    
    $result =$this->conn->query($sql);

    if($result==FALSE){
        die('Update coupon is failed'.$this->conn->connect_error);
        
    }else{
        header('location:addService.php');
    }

}
function deleteCoupon($couponID){
    $sql="DELETE FROM coupon WHERE coupon_id = '$couponID'";
    $result=$this->conn->query($sql);

    if($result == FALSE){
        die('deleteing coupon failed'.$this->conn->connect_error);
    }else{
        header('location:addService.php');

    }

}


//booking2.php
function getSelectServiceID($selected_sID){
    $sql="select * FROM service WHERE service_id ='$selected_sID'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not get service id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();

    }

}
function getSelectCouponID($selected_cID){
    $sql="select * FROM coupon WHERE coupon_id ='$selected_cID'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not get coupon id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();

    }

}



// addCatalog.php
function uploadCatalog($c_photo, $c_comment,$photo_stylist){
    $target_dir ='upload/admin/catalog/';
    $target_file= $target_dir.basename($c_photo);
    
    $sql = "INSERT INTO catalog(catalog_photo, catalog_comment, photo_stylist) VALUES('$c_photo', '$c_comment','$photo_stylist')";
    
    $result = $this->conn->query($sql);

    if($result == TRUE){
        move_uploaded_file($_FILES['catalog_photo']['tmp_name'],$target_file);
       header ('location:addCatalog.php');
    }else{
        die('add catalog has an error'.$this->conn->error);       
    }

}
function displayCatalog(){
    $sql="SELECT * FROM catalog ORDER BY catalog_id DESC";
    $result =$this->conn->query($sql);

    if($result->num_rows>0){

        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }

    
}

// editCatalog.php
function getCatalogID($catalogID){
    $sql="SELECT * FROM catalog WHERE catalog_id='$catalogID'";
    $result = $this->conn->query($sql);

    if($result ==FALSE){
        die('can not get one photo id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }

}

function editCatalog($c_photo,$c_comment,$p_stylist,$catalogID){
    $target_dir='upload/admin/catalog/';
    $target_file=$target_dir.basename($c_photo);

    $sql = "UPDATE catalog SET catalog_photo='$c_photo', catalog_comment='$c_comment', photo_stylist= '$p_stylist' WHERE catalog_id ='$catalogID' ";

    $result = $this->conn->query($sql);

    if($result == TRUE){
        move_uploaded_file($_FILES['catalog_photo']['tmp_name'],$target_file);
        header ('location:addCatalog.php');
     }else{
         die('edit catalog has an error'.$this->conn->error);       
     }

    
}

// deleteCatalog.php
function deleteCatalog($catalogID){
    $sql="DELETE FROM catalog WHERE catalog_id = '$catalogID'";
    $result=$this->conn->query($sql);

    if($result == FALSE){
        die('deleteing catalog failed'.$this->conn->connect_error);
    }else{
        header('location:addCatalog.php');

    }
}


// booking5
function getSelectedAddMenu($selectedAdditionalMenu){
    $sql="select * FROM service WHERE service_id ='$selectedAdditionalMenu'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not get AddMenu id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();

    }

}
function getSelectedStylist($selected_stylistID){
    $sql="select * FROM staff WHERE staff_id ='$selected_stylistID'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('can not get staff id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();

    }

}
// confirm reservation
function addReservation($date,$hour,$fname,$lname,$customerID,$order,$addMenu,$nomination,$totalPrice){
    $sql="INSERT INTO `reservation`(`reserve_date`, `reserve_hour`, `fname`, `lname`, `c_id`, `order_menu`, `add_menu`, `nomination`, `total_price`) VALUES ('$date','$hour','$fname','$lname','$customerID','$order','$addMenu','$nomination','$totalPrice')";
    $result = $this->conn->query($sql);

    if($result ==FALSE){
        die('insert reservation is failed'.$this->conn_connect_error);
    }else{
        header('location:booking6.php');
    }

}
function addReserve_by_admin($date,$hour,$fname,$lname,$c_id,$coupon_id,$service_id,$nomination,$totalPrice){
    $sql="INSERT INTO `reservation`(`reserve_date`, `reserve_hour`, `fname`, `lname`, `c_id`, `order_menu`, `add_menu`, `nomination`, `total_price`) VALUES ('$date','$hour','$fname','$lname','$c_id','$coupon_id','$service_id','$nomination','$totalPrice')";
    $result = $this->conn->query($sql);

    if($result ==FALSE){
        die('insert reservation is failed'.$this->conn_connect_error);
    }else{
        header('location:reservation.php');
    }
}


// admin.php
// dispaly todays reservation
function displayTodaysReservation($today){
    $sql ="SELECT * FROM reservation WHERE reserve_date='$today' ORDER BY reserve_hour";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){

        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }

}
function todaysCount($today){
    $sql="SELECT count(*) FROM reservation WHERE reserve_date='$today'";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        die('cannot get todays count');
    }else{
        return $result->fetch_assoc();
    }
}

// display latest reservation
function displayLatestReservation(){
    $sql ="SELECT * FROM reservation ORDER BY reserve_id DESC LIMIT 10";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){

        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }

}

// edit reservation
function getReserveID($reserveID){
    $sql="SELECT * FROM reservation WHERE reserve_id='$reserveID'";
    $result = $this->conn->query($sql);

    if($result ==FALSE){
        die('can not get reserve id'.$this->conn->connect_error);
    }else{
        return $result->fetch_assoc();
    }

}
// delete reservation
function deleteReserve($reserveID){
    $sql="DELETE FROM reservation WHERE reserve_id = '$reserveID'";
    $result=$this->conn->query($sql);

    if($result == FALSE){
        die('deleteing reservation failed'.$this->conn->connect_error);
    }else{
        $loginid=$_SESSION['loginid'];
        $sql2 ="SELECT * FROM login WHERE login_id ='$loginid'";
        $result2 = $this->conn->query($sql2);

        if($result2->num_rows==1) {
            $row=$result2->fetch_assoc();

            if($row['status']=='A'){
                header('location:reservation.php');
            }else{
                header('location:mypage.php');
            }
            
        }
    }
}

// reservation.php
function displayReservation(){
    $sql ="SELECT * FROM reservation ORDER BY reserve_id DESC";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){

        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }

}
// edit reserve
function updateReservation($reserve_id,$n_date,$n_hour,$n_coupon,$n_addMenu,$n_nomination,$totalPrice){
    $sql="UPDATE `reservation` SET `reserve_date`='$n_date',`reserve_hour`='$n_hour',`order_menu`='$n_coupon',`add_menu`='$n_addMenu',`nomination`='$n_nomination', total_price = '$totalPrice' where reserve_id ='$reserve_id'";

    $result = $this->conn->query($sql);

    if($result == TRUE){
        header('location:reservation.php');
        // header("location:editReserve2.php?reserve_id=$reserve_id");    
       
    }else{
        die('update reservation is error'.$this->conn->error);       
    }

}


// userlist.php
function displayUserList(){
    $sql="SELECT * FROM client INNER JOIN login ON client.c_id= login.login_id ORDER BY client.c_id DESC";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){

        while($rows =$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }
}
function searchUser($keyword){
    $sql = "SELECT * FROM client INNER JOIN login ON client.c_id=login.login_id WHERE client.fname='%$keyword%'";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        // echo 'no result';
        return FALSE;
    }
}
function searchPhoneNumber($number){
    $sql = "SELECT * FROM client INNER JOIN login ON client.c_id=login.login_id WHERE client.telephone='$number'";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        return FALSE;
    }
}
// edit user.php
function getUserforEdit($client_id){
    $sql="SELECT * FROM client INNER JOIN login ON client.c_id= login.login_id WHERE client.c_id='$client_id'";
    $result = $this->conn->query($sql);

    if($result == FALSE){
        die('can not get one user'.$this->conn->connect_error);

    }else{
        return $result ->fetch_assoc();
    }
}
function addUserBio($c_id,$user_bio){
    $sql="UPDATE client SET bio ='$user_bio' WHERE c_id='$c_id'";
    $result=$this->conn->query($sql);

    if($result==FALSE){
        die('can not add user bio'.$this->conn->connect_error);
    }else{
        header("location:editUser.php?id=$c_id");
    }

}
function addMemo($c_id,$photo,$memo,$date){
    $target_dir ='upload/admin/c_photo/';
    $target_file= $target_dir.basename($photo);

    $sql="INSERT INTO `client_memo`(`c_id`, `photo` , `memo`, date) VALUES ('$c_id','$photo','$memo','$date')";
    $result=$this->conn->query($sql);

    if($result ==FALSE){
        echo "Insert client_memo is failed";
    }else{
        move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
        header("location:editUser.php?id=$c_id");
    }
}
function getMemo($client_id){
    $sql = "SELECT * FROM client_memo WHERE c_id='$client_id' ORDER BY date DESC";
    $result = $this->conn->query($sql);

    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        // echo 'no result';
        return FALSE;
    }
}
function deleteMemo($memoID,$c_id){
 
    $sql ="DELETE FROM client_memo WHERE memo_id=$memoID";
    $result =$this->conn->query($sql);

    if($result==FALSE){
        die('delete memo failed'.$this->conn->connect_error);
    }else{
        header("location:editUser.php?id=$c_id");
    }
}

########################

function getTimeHourReserve($date,$hour){
    $sql="SELECT * FROM reservation WHERE reserve_date='$date' AND reserve_hour='$hour'";
    $result = $this->conn->query($sql);

    if($result->num_rows >=0 ){
        while($rows=$result->fetch_assoc()){
            $row[]=$rows;
        }
        return $row;
    }else{
        echo "error";
        // return $result->fetch_assoc();
    }
}

################


} //class
?>
