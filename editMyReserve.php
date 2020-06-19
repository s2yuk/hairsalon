<?php
include 'userMenu.php';
// echo $_SESSION['loginid'];
// $loginid=$_SESSION['loginid'];
// $currentUser = $Hairsalon->getOneUser($loginid);
// echo "loginID =".$loginid;
$myReserveList = $Hairsalon->myReserve($loginid);

$reserveID = $_GET['reserve_id'];
$row = $Hairsalon->getReserveID($reserveID);

$CouponList =$Hairsalon->displayCouponMenu();
$MenuList =$Hairsalon->displayServiceMenu();

$staffList =$Hairsalon->displayStaff();

$selected_cID=$row['order_menu'];
$Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);
$selected_sID=$row['add_menu'];
$selected_service=$Hairsalon->getSelectServiceID($selected_sID);

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
        margin-top: 100px;
      }
      h3{
        font-family: 'Oleo Script', cursive;
      }
    </style>
  
  </head>
  <body>
      <div class="container">
        <a href="mypage.php" class="btn btn-outline-dark">back</a>
        <div class="card mt-2">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-6">
                <h3>Reservation</h3>
              </div>
              <div class="col-lg-6 text-right">
                <?php
                  echo "<a href='deleteReserve.php?reserve_id=$reserveID' role='button'  class='btn btn-outline-danger'>delete </a>";
                ?>
              </div>
            </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col-lg-3">
              reserve ID
            </div>
            <div class="col-lg-9">
              <?php echo $row['reserve_id'];?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              customer ID
            </div>
            <div class="col-lg-9">
              <?php echo $row['c_id'];?>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              Name
            </div>
            <div class="col-lg-9">
              <?php echo $row['fname']," ".$row['lname'];?>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-lg-3">
              date
            </div>
            <div class="col-lg-9">
              <?php echo $row['reserve_date'];?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-3">
                time
            </div>
            <div class="col-lg-9">
              <?php echo $row['reserve_hour'];?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-3">
              Coupon menu
            </div>
            <div class="col-lg-9">
              <?php echo $Selected_coupon['coupon_name'];?>
            </div>
          </div>
          <div class="row mt-3">
              <div class="col-lg-3">
                Regular menu
              </div>
              <div class="col-lg-9">
                <?php echo $selected_service['service_name'];?> 
              </div>         
          </div>
          <div class="row mt-3">
              <div class="col-lg-3">
                  nomination
              </div>
              <div class="col-lg-9">
                  <?php 
                  if (empty($row['nomination'])){
                    echo "No selected";
                  }else{
                    echo $row['nomination'];
                  }
                  ?>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-3">
                price
              </div>
              <div class="col-lg-9">
                <?php 
                    if(!empty($Selected_coupon['coupon_price'] and $selected_service['price'])){
                      echo $Selected_coupon['coupon_price']."+".$selected_service['price'];
                      $total = $Selected_coupon['coupon_price']+$selected_service['price'];
                      echo "=".$total;
                  }elseif(!empty($Selected_coupon['coupon_price'])){
                      $total = $Selected_coupon['coupon_price'];
                      echo $total;
                  }elseif(!empty($selected_service['price'])){
                      $total = $selected_service['price'];
                      echo $total;
                  }

             
                // echo "<br>";
                // echo $row['total_price'];
                ?>
              </div>
          </div>
        </div>
      </div>
          
      
        <br>
      </div>
             <!-- footer -->
    <nav class="nav navbar  bg-dark fixed-bottom">
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