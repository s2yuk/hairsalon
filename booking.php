<?php
include 'userMenu.php';

// display menu list
$addMenuList =$Hairsalon->displayServiceMenu();
$addCouponList =$Hairsalon->displayCouponMenu();


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Booking</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
      body{
        margin-top:100px;
        height: 600px;
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
    </style>
</head>
  <body>

    <div class="container bg-light text-monospace text-center">        
      <h4 class="display-4 text-monospace p-3">Booking</h4>
    </div>
    <div class="container bg-light text-monospace text-center mb-5">        
      <br>
      <div class="alert alert-dark ">
          <h5 class="text-monospace p-3">Step 1</h4>
          <p class="text-monospace"> select menu</p>
      </div>
        
       

   
       
        <div class="w-75 mx-auto">

        <h3>Coupon</h3>
        <?php 
        foreach ($addCouponList as $coupon) :?>
          
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/coupon1.png" alt="" class="img-thumbnail">
                </div>
                <div class="col-lg-5">
                  <h4><?php echo $coupon['coupon_name'] ?></h4>
               
                  <p class=" display-5 text-black-50">* except: Yamaguchi & Ogawa</p>

                  
                </div>
                <div class="col-lg-3">
                  <?php echo "¥".$coupon['coupon_price'] ?>
                </div>
                <div class="col-lg-2">
                    <?php 
                    $couponID= $coupon['coupon_id'];
                    echo "<a href='booking2.php?coupon_id=$couponID' role='button' class='btn btn-outline-dark'>select</a>"
                      ?>
                </div>
              </div>
            </div>
          </div>


        <?php endforeach; ?>


        <hr>      



        <h4 class="mt-3 p-3">Regular menu</h4>
        <!-- 0 -->
        <?php 
        foreach ($addMenuList as $menu) :?>
          
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  <?php echo $menu['service_name'] ?>
                  
                </div>
                <div class="col-lg-4">
                  <?php echo "¥".$menu['price'] ?>
                </div>
                <div class="col-lg-2">
                    <?php 
                    $serviceID =$menu['service_id'];
                    echo "<a href='booking2.php?service_id=$serviceID' role='button' class='btn btn-outline-dark'>select</a>"
                      ?>
                </div>

              </div>
            </div>
          </div>


        <?php endforeach; ?>




        <br><br>
        <!-- container -->
        </div>

    </div>
    
    
  





      





      <!-- footer -->
      <nav class="nav navbar bg-dark mt-5">
        <a class="" href="dashboard.php" >Go to top</a>
        <p class="text-light">copyright@ Yuka</p>
        <a href="contactpage.php">contact</a>   
      </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>