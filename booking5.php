<?php
    include 'navbar.php';

    $loginid=$_SESSION['loginid'];
    $currentUser = $Hairsalon->getOneUser($loginid);

    $selected_sID =$_SESSION['service_id'];
    $Selected_service =$Hairsalon->getSelectServiceID($selected_sID);
  
    $selected_cID = $_SESSION['coupon_id'];
    $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);

    $selected_stylistID =$_SESSION['select_stylist'];
    $selected_stylist =$Hairsalon->getSelectedStylist($selected_stylistID);

    $selectedAdditionalMenu = $_SESSION['booking2_id'];
    $selected_AddMenu =$Hairsalon->getSelectedAddMenu($selectedAdditionalMenu);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>booking5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* navbar with bootstrap */
      .menu-container, .header-center ul{
        position: fixed;
        top: 0;
      }
  
      /* ---------------------------------- */
      body{
        margin-top:150px;
        /* height: 600px;
        overflow: scroll; */
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;
      }
      #booking{
        background-color: rgba(255, 255, 255, 0.8);
      }
      div h4{
        font-family: 'Oleo Script', cursive;

      }
      #confirm-msg{
          width: 50%;
      }
        /* --------------------------------- */
      footer{
        position: relative;
        bottom: 0;
        width: 100%;
      }
      @media(max-width:1000px){
        .header-center ul{
          position: fixed;
          top: 80px;
          left:50px;
          margin-left:0px;
        }
        .col-lg-4{
            font-size: 0.8rem;
          }
        /* --------------------------------*/
      }
      @media(max-width:670px){
        #confirm-msg{
            width: 100%;
            
        }
        #confirm-msg p, #confirm-msg button{
            font-size: 0.8rem;
        }
      }
    
    </style>
</head>
  <body>

    <div class="container text-monospace text-center w-50 rounded" id="booking">
        <h4 class="display-4 p-3">Booking</h4>
    </div>
    <div class="container bg-light rounded">
       <br>
        <div class="alert alert-dark text-center text-monospace mt-3">
            <h5 class="p-3">Confirmation</h5>
        </div>
        <div class="w-75 border mx-auto text-capitalize m-3 p-3 text-monospace">
            
                <div class="row ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                        Customer ID:
                </div>
                <div class="col-lg-8">
                    <?php
                        echo $_SESSION['loginid'];
                    ?>
                </div>
            </div>
            <div class="row mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    Name:
                </div>
                <div class="col-lg-8 ">
                    <?php
                        echo $currentUser['fname']," ".$currentUser['lname'];
                    ?>
                </div>
            </div>
            <div class="row mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    Date:
                </div>
                <div class="col-lg-8">
                    <?php
                        echo $_SESSION['selected_date'];
                        echo " ";
                        echo $_SESSION['hour'];
                    ?>
                </div>
            </div>
            <div class="row mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    <!-- booking.php -->
                    Menu:   
                </div>
                <div class="col-lg-8">
                    <?php
                        // echo "#";
                        // echo $_SESSION['coupon_id'];
                        echo $Selected_coupon['coupon_name'];
                    ?>
                </div>
            </div>
            <div class="row  mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    Additional menu:
                </div>
                <div class="col-lg-8">
                    <?php
                        //booking2
                        // echo $_SESSION['booking2_id'];
                        echo $selected_AddMenu['service_name'];
                    ?>
                </div>
            </div>
            <div class="row  mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    Price:
                </div>
                <div class="col-lg-8">
                    <?php
                        if(!empty($Selected_coupon['coupon_price'] and $_SESSION['booking2_price'])){
                            echo $Selected_coupon['coupon_price']." + ".$_SESSION['booking2_price'];
                            $totalPrice = $Selected_coupon['coupon_price']+$_SESSION['booking2_price'];
                            echo " = ¥".$totalPrice;
                        }elseif(!empty($Selected_coupon['coupon_price'])){
                            $totalPrice = $Selected_coupon['coupon_price'];
                            echo "¥".$totalPrice;
                        }elseif(!empty($_SESSION['booking2_price'])){
                            $totalPrice = $_SESSION['booking2_price'];
                            echo "¥".$totalPrice;
                        }
                        echo "<br>";
                    ?>
                </div>
            </div>
            <div class="row  mt-3 ml-lg-5 ml-md-5 ml-sm-5">
                <div class="col-lg-4">
                    Stylist:
                </div>
                <div class="col-lg-8">
                    <?php
                        // echo $_SESSION['select_stylist'];
                        echo $selected_stylist['staff_name'];
                    ?>
                </div>
            </div>

        </div> 
        <div class="alert alert-dark mx-auto m-3 text-center" id="confirm-msg">
            <p>Please make sure your entery. <br>
            Can we proceed with the reservation? <br>
            上記の内容でよろしいでしょうか？
            </p>

            <div class="row">  
            <div class="col-lg-12">
                
                <!-- <a href='booking6.php' role='button' class='btn btn-dark btn-block'>RESERVE</a> -->
                    
                <form action="hairsalonAction.php" method="post">
                    <input type="hidden" name="fname" value="<?php echo $currentUser['fname']?>">
                    <input type="hidden" name="lname" value="<?php echo $currentUser['lname']?>">
                    <!-- <input type="hidden" name="order" value="<?php //echo $Selected_coupon['coupon_name']?>"> -->
                    <input type="hidden" name="order" value="<?php echo $_SESSION['coupon_id'];?>">
                    <input type="hidden" name="addMenu" value="<?php echo $_SESSION['booking2_id'];?>">

                    <!-- <input type="hidden" name="addMenu" value="<?php //echo $selected_AddMenu['service_name']?>"> -->
                    <input type="hidden" name="price" value="<?php echo $totalPrice?>">
                    <input type="hidden" name="nomination" value="<?php echo $selected_stylist['staff_name']?>">


                    <button type="submit" name="reserve" class='btn btn-dark btn-block text-monospace'>R E S E R V E <br>予約する</button>
                </form>
                <br>

            </div>
            <div class="col-lg-12">
                <form action="hairsalonAction.php" method="post">
                <button type="submit" name="reselect5" class="btn btn-secondary m-2"> <i class="fas fa-angle-double-left"></i> Reselect　再選択</button>
                </form>
            </div> 
            
            </div>
            
        </div>
    <br>
    </div>
    <!-- footer -->
    <footer class="">
      <ul>
        <li>
          <a href="dashboard.php">Home</a>
        </li>
        <li>
          <p>Copyright@ Yuka Matsumoto</p>
        </li>
        <li>
          <a href="contactpage.php">Contact</a>
        </li>
      </ul>
    </footer>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>