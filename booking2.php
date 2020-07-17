<?php
include 'userMenu.php';
// session_start();
$addMenuList =$Hairsalon->displayServiceMenu();
$serviceID =$addMenuList['sevice_id'];

// $addCouponList =$Hairsalon->displayCouponMenu();
// $couponID= $addCouponList['coupon_id'];

$selected_sID =$_SESSION['service_id'];
$Selected_service =$Hairsalon->getSelectServiceID($selected_sID);
// echo $_SESSION['service_id'];


$selected_cID = $_SESSION['coupon_id'];
$Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);




?>

<!doctype html>
<html lang="en">
  <head>
    <title>booking step 2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
      body{
        margin-top:150px;
        height: 600px;
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
      #booking{
        background-color: rgba(255, 255, 255, 0.8);
      }
      div h5{
        font-family: 'Oleo Script', cursive;
      }
      #image_smile{
        width: 150px;
      }
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    
  
  </head>
  <body>
      <div class="container text-monospace text-center w-50 rounded" id="booking">        
        <h5 class="display-4 p-3">Booking</h5>
      </div>

      <div class="container bg-light text-monospace text-center mb-5 rounded">        
        <br>
        <div class="alert alert-dark">
            <h5 class="text-monospace p-3">Step 2</h4>
            <?php if(!empty($_SESSION['coupon_id'])):?>
              <p class="text-monospace"> additional menu</p>
            <?php else:?>
              <p>select menu</p>
              <form action="hairsalonAction.php" method="post">
                <button type="submit" name="reselect" class="btn btn-secondary"> <i class="fas fa-angle-double-left"></i> back</button>
              </form>
            <?php endif;?>
        </div>
          
        <div class="w-75 mx-auto">
          <?php if(!empty($_SESSION['coupon_id'])):?>
          <!-- display chosen menu -->
          <div class="card alert alert-secondary">
            <div class="card-body">
              <div class="row">
                
                <div class="col-lg-5">
                    You are chosing 選択中　:<br>
                   
                  <?php 
                  if($_SESSION['service_id']){
                    
                    echo "<h4>".$Selected_service['service_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3'>";
                    echo "Price is:";
                    echo "<br>";
                    echo "<h4>".$Selected_service['price']."</h4>";
                
                  }else{

                    echo "<h4>".$Selected_coupon['coupon_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3'>";
                    echo "Price is: ";
                    echo "<br>";
                    echo "<h4>".$Selected_coupon['coupon_price']."</h4>";
                 
                  }
                 
                  
                  ?>

                </div>

                <div class="col-lg-2">
                  <form action="hairsalonAction.php" method="post">
                    <button type="submit" name="reselect" class="btn btn-secondary"> <i class="fas fa-angle-double-left"></i> Reselect</button>
                  </form>
                </div>  
                <div class="col-lg-2">
                    <a href='booking3.php' role='button' class='btn btn-outline-dark'> <i class="fas fa-angle-double-right"></i> Continue</a>
                </div>

               

              </div>
            </div>
          </div>

          <?php endif;?>

       

        
        

          <h4>Regular menu</h4>
          <!-- 0 -->
          <?php 
          foreach ($addMenuList as $menu) :?>
            
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-2">
                  <img src="asset/smile.jpg" alt="" id="image_smile">
                  </div>
                  <div class="col-lg-4">
                    <?php echo $menu['service_name'] ?>
                    
                  </div>
                  <div class="col-lg-4">
                    <?php echo "¥".$menu['price'] ?>
                  </div>
                  <div class="col-lg-2">
                      <?php 
                      ?>
                      <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="booking2_id" value="<?php echo $menu['service_id'];?>">
                        <input type="hidden" name="booking2_price" value="<?php echo $menu['price'];?>">

                        
                        <br>
                        <button type="submit" name="addBooking2" class="btn btn-outline-dark">select</button>
                      </form>

                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
          <br>

        </div>
      <!--container  -->
      </div>
      
      <!-- footer -->
      <nav class="nav navbar bg-dark mt-5">
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