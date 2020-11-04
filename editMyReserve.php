<?php
include 'navbar.php';
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
    <title>edit my reserve</title>
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
        margin-top: 150px;
      }
      h3{
        font-family: 'Oleo Script', cursive;
      }
      @media(max-width:1000px){
        .header-center ul{
          position: fixed;
          top: 80px;
          left:50px;
          margin-left:0px;
        }
        /* ------------------- */
        .col-4{
          font-size: 0.8rem;
        }
        .btn{
          font-size: 0.8rem;
        }
      }
    </style>
  </head>
  <body>
      <div class="container">
        <a href="mypage.php" class="btn btn-outline-dark">back</a>
        <div class="card mt-2">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <h3>Reservation</h3>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                <?php
                  echo "<a href='deleteReserve.php?reserve_id=$reserveID' role='button' class='btn btn-outline-danger'>cancel</a>"; 
                ?>
              </div>
            </div>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="col-4">
              Reserve ID :
            </div>
            <div class="col-8">
              <?php echo $row['reserve_id'];?>
            </div>
          </div>
          <div class="row  mt-3">
            <div class="col-4">
              Customer ID :
            </div>
            <div class="col-8">
              <?php echo $row['c_id'];?>
            </div>
          </div>
          <div class="row  mt-3">
            <div class="col-4">
              Name :
            </div>
            <div class="col-8">
              <?php echo $row['fname']," ".$row['lname'];?>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-4">
              Date :
            </div>
            <div class="col-8">
              <?php echo $row['reserve_date'];?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-4">
                Time :
            </div>
            <div class="col-8">
              <?php echo $row['reserve_hour'];?>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-4">
              Coupon menu :
            </div>
            <div class="col-8">
              <?php echo $Selected_coupon['coupon_name'];?>
            </div>
          </div>
          <div class="row mt-3">
              <div class="col-4">
                Regular menu :
              </div>
              <div class="col-8">
                <?php echo $selected_service['service_name'];?> 
              </div>         
          </div>
          <div class="row mt-3">
              <div class="col-4">
                  Nomination :
              </div>
              <div class="col-8">
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
              <div class="col-4">
                Price :
              </div>
              <div class="col-8">
                <?php 
                    if(!empty($Selected_coupon['coupon_price'] and $selected_service['price'])){
                      echo $Selected_coupon['coupon_price']."+".$selected_service['price'];
                      $total = $Selected_coupon['coupon_price']+$selected_service['price'];
                      echo " = ¥".$total;
                  }elseif(!empty($Selected_coupon['coupon_price'])){
                      $total = $Selected_coupon['coupon_price'];
                      echo "¥ ".$total;
                  }elseif(!empty($selected_service['price'])){
                      $total = $selected_service['price'];
                      echo "¥ ".$total;
                  }
                // echo $row['total_price'];
                ?>
              </div>
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