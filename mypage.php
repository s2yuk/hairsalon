<?php
include 'userMenu.php';
// echo $_SESSION['loginid'];
$loginid=$_SESSION['loginid'];
// $currentUser = $Hairsalon->getOneUser($loginid);
// echo "loginID =".$loginid;
$myReserveList = $Hairsalon->myReserve($loginid);

$reserveID = $_GET['reserve_id'];
$row = $Hairsalon->getReserveID($reserveID);

$login_email = $Hairsalon->getEmail($loginid);
// echo "login Email:".$login_email['email'];
$email = $login_email['email'];
$myMsgList = $Hairsalon->myMessage($email);
// echo $myMsgList;

$reply_list = $Hairsalon-> displayReply($msgID);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
     
        body{
          margin-top:100px;        
          background-image: url(asset/logo1.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
        }
        div p,h3{
            font-family: 'Oleo Script', cursive;
            color:white;
            -webkit-text-stroke: 1px black;
        }
        h3{
            letter-spacing: 2px;
        }
        #table{
            max-height: 300px;
            overflow: scroll;
        }
        #footer{
            margin-top: 180px;
        }

    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">


  </head>
  <body>
      <div class="container">
        <p class="display-4">My page</p>
        <br>
        <div class="">
            <h3>Resavertion</h3>
            <div class="bg-light " id="table">
                <table class="table table-hover">
                    <?php if ($myReserveList > 0 ):?>
                        <thead>
                            <th>Date</th>
                            <th>Time</th>
                            <th colspan="2">Menu</th>
                            <th>Nomination</th>
                            <th>Price</th>
                            <th>Option</th>
                        </thead>
                        <?php foreach($myReserveList as $row):?>
                            <?php $reserveID=$row['reserve_id']; ?>
                            <tbody>
                                <td><?php echo $row['reserve_date'];?></td>
                                <td><?php echo $row['reserve_hour'];?></td>
                                <td>
                                    <?php //echo $row['order_menu'];?>
                                <?php 
                                    $selected_cID=$row['order_menu'];
                                    $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);
                                    echo $Selected_coupon['coupon_name'];
                                ?>
                                </td>
                                <td><?php 
                                    // echo $row['add_menu'];
                                    $selected_sID=$row['add_menu'];
                                    $selected_service=$Hairsalon->getSelectServiceID($selected_sID);
                                    echo $selected_service['service_name'];
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                        if (empty($row['nomination'])){
                                            echo "-----";
                                        }else{
                                            echo $row['nomination'];
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php echo $row['total_price'];?>
                                </td>
                                <td> <a href="editMyReserve.php?reserve_id=<?php echo $reserveID;?>" class="btn btn-dark">edit</a> </td>
                            </tbody>
                        <?php endforeach ;?>
                    <?php else :?>
                            <div class="card-body">
                                <h3>No reservation yet</h3>
                            </div>
                    <?php endif;?>
                </table>
            </div>
                
          
            <h3>Message</h3>
            <div class="bg-light" id="table">
            <table class="table table-hover">                
                <div class="div">
                    <?php if($myMsgList > 0):?>
                        <thead>
                            <th>contact_id</th>
                            <th>name</th>
                            <th>message</th>    
                            <!-- <th></th> -->
                            <th></th>
                        </thead>
                        <?php foreach($myMsgList as $msg) :?>
                            <tbody>
                                <td><?php echo $msg['contact_id'];?></td>
                                <td><?php echo $msg['contact_name'];?></td>
                                <td><?php echo $msg['comment']; ?></td>
                                <!-- <td>
                                    <?php //  $c_id = $msg['contact_id'];
                                       // $countReply = $Hairsalon->countReply($c_id); 
                                        // echo $countReply;
                                    ?>
                                </td> -->
                                <td><a href="message_detail.php?contact_id=<?php echo $msg['contact_id'];?>" class="btn btn-dark">Read</a></td>
                            </tbody>
                        <?php endforeach ;?>
                    <?php else :?>
                        <div class="card-body">
                            <h3>No message yet</h3>
                        </div>
                    <?php endif ;?>
                </div>
              </table>
            </div>
            

            
        </div>
      </div>
         <!-- footer -->
    <nav class="nav navbar  bg-dark" id="footer">
        <a href="dashboard.php" >Home</a>
        <p class="text-light">Copyright@ Yuka Matsumoto</p>
        <a href="contactpage.php">Contact</a>
    </nav>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>