<?php
include 'userMenu.php';
$addMenuList =$Hairsalon->displayServiceMenu();
$serviceID =$menu['sevice_id'];


$selected_sID =$_GET['service_id'];
$firstSelect =$Hairsalon->getSelectServiceID($selected_sID);
echo $_SESSION['service_id'];


$selected_cID = $_GET['coupon_id'];
$first_Select =$Hairsalon->getSelectCouponID($selected_cID);
echo $_SESSION['coupon_id'];

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
        <div class="alert alert-dark">
            <h5 class="text-monospace p-3">Step 2</h4>
            <p class="text-monospace"> additional menu</p>
        </div>

        <div class="w-75 mx-auto">

            <!-- display chosen menu -->
            <div class="card alert alert-secondary">
            <div class="card-body">
              <div class="row">
                
                <div class="col-lg-5">
                    You are chosing : <br>
                    <form action="hairsalonAction.php" method="post">
                  <?php 
                  if($_GET['service_id']){
                    
                    echo "<h4>".$firstSelect['service_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3'>";
                    echo "Price is:";
                    echo "<br>";
                    echo "<h4>".$firstSelect['price']."</h4>";
                
                  }else{

                    echo "<h4>".$first_Select['coupon_name']."</h4>";
                    echo"</div>";
                    echo "<div class='col-lg-3'>";
                    echo "Price is: ";
                    echo "<br>";
                    echo "<h4>".$first_Select['coupon_price']."</h4>";
                 
                  }
                  ?>
                    <input type="hidden" name="firstChoise" value="">

                  </form>

                </div>

                <div class="col-lg-2">
                  <a href="booking.php" role='button' class="btn btn-dark">Re:select</a>
                </div>  
                <div class="col-lg-2">
                    <?php 
                    if($_GET['service_id']){

                        echo "<a href='booking3.php?service_id=$serviceID' role='button' class='btn btn-outline-dark'>Continue</a>";
                    }elseif($_GET['coupon_id']){
                        echo "<a href='booking3.php?coupon_id=$couponID' role='button' class='btn btn-outline-dark'>Continue</a>";
                    }
                    
                    ?>
                    
                </div>


              </div>
            </div>
          </div>


       

        
        

        <h4>Additional menu</h4>
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

                    echo "<a href='booking3.php?service_id=$serviceID' role='button' class='btn btn-outline-dark'>add</a>"
                      ?>
                    <form action="hairsalonAction.php" method="post">
                        <input type="checkbox" name="menu[]" id="" value="<?php echo$serviceID ?>">
                        <input type="checkbox" name="menu[]" id="" value="<?php echo$couponID ?>">

                    </form>


                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
            <br>














        <!--container  -->
      </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>