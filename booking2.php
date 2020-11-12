<?php
include 'navbar.php';

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
      /* navbar with bootstrap */
      .menu-container, .header-center ul{
            position: fixed;
            top: 0;
        }
    
      /* ---------------------------------- */
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
       /*  */
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
        /* ------------------- */
      }
    </style>
  </head>
  <body>
      <div class="container text-monospace text-center w-50 rounded" id="booking">        
        <h5 class="display-4">Booking</h5>
      </div>

      <div class="container bg-light text-monospace text-center mb-5 rounded">        
        <br>
        <div class="alert alert-dark">
            <h5 class="text-monospace p-3">Step 2</h4>
            <?php if(!empty($_SESSION['coupon_id'])):?>
              <p class="text-monospace"> additional menu</p>  追加メニュー
              <br>
            <?php else:?>
              <p>select menu</p>
              <form action="hairsalonAction.php" method="post">
                <button type="submit" name="reselect" class="btn btn-secondary"> <i class="fas fa-angle-double-left"></i> back　戻る</button>
              </form>
            <?php endif;?>
        </div>
          
        <div class="">
          <?php if(!empty($_SESSION['coupon_id'])):?>
          <!-- display chosen menu -->
          <div class="card alert alert-secondary w-75 mx-auto">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-5 col-md-5">
                    You are chosing 選択中 :
                    <br>
                  <?php 
                  if($_SESSION['service_id']){
                    echo "<h4>".$Selected_service['service_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3 col-md-3'>";
                    echo "Price is:";
                    echo "<br>";
                    echo "<h4>".$Selected_service['price']."</h4>";
                  }else{
                    echo "<h4>".$Selected_coupon['coupon_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3 col-md-3'>";
                    echo "Price is: ";
                    echo "<br>";
                    echo "<h4>".$Selected_coupon['coupon_price']."</h4>";
                  }
                  ?>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <form action="hairsalonAction.php" method="post">
                        <button type="submit" name="reselect" class="btn btn-secondary" id="reselect-btn"> <i class="fas fa-angle-double-left"></i> Reselect　再選択</button>
                      </form>
                    </div>
                    <div class="col-lg-6">
                          <a href='booking3.php' role='button' class='btn btn-outline-dark' id="continue-btn">  
                            <i class="fas fa-angle-double-right"></i> Continue　続ける</a>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
          </div>
          <?php endif;?>
          <br>
          <h4>Regular menu</h4>
          レギュラーメニュー
          <!-- 0 -->
          <?php foreach ($addMenuList as $menu) :?>
            
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <img src="asset/smile.jpg" alt="" id="image_smile">
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5 mt-3 mt-lg-0">
                    <p><?php echo $menu['service_name'] ?></p>  
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 mt-3 mt-lg-0">
                    <p><?php echo "¥".$menu['price'] ?></p>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2">
                    <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="booking2_id" value="<?php echo $menu['service_id'];?>">
                      <input type="hidden" name="booking2_price" value="<?php echo $menu['price'];?>">
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