<?php
// include 'userMenu.php';
include 'navbar.php';

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
      .img-thumbnail{
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
        h4, p{
          font: 0.8rem;
        }
      }
    </style>
</head>
  <body>
    <div class="container text-monospace text-center w-50 rounded" id="booking">        
      <h5 class="display-4">Booking</h5>
      <p>ご予約</p>
    </div>
    <div class="container bg-light text-monospace text-center mb-5 rounded">        
      <br>
      <div class="alert alert-dark">
          <h5 class="text-monospace p-3">Step 1</h4>
          <p class="text-monospace"> select Coupon menu</p>
          <p>クーポンから選ぶ</p>
          <div class="">
            skip <i class="fas fa-angle-double-right"></i> <a href="booking2.php" class="btn btn-dark">Regular menu
            <br>
            レギュラーメニューから選ぶ
            </a>
          </div>
      </div>    
      <div class="mt-5 mx-auto">
        <h3>Coupon</h3>
       クーポン 
        <?php 
        // print_r($addCouponList);
        foreach ($addCouponList as $coupon) :?> 
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2 col-md-2" id="icon-div">
                  <img src="asset/coupon1.png" alt="" class="img-thumbnail">
                </div>
                <div class="col-lg-6 col-md-6  mt-3 mt-lg-0" id="coupon-div">
                  <h4><?php echo $coupon['coupon_name'] ?></h4>
                  <p class=" display-5 text-black-50">* except: producer & manager</p>
                </div>
                <div class="col-lg-2 col-md-2" id="price-div">
                  <p><?php echo "¥".$coupon['coupon_price'] ?></p>
                </div>
                <div class="col-lg-2 col-md-2 " id="select-div">
                  <form action="hairsalonAction.php" method="post">
                    <input type="hidden" name="coupon" value="<?php echo $coupon['coupon_id'];?>">
                    <input type="hidden" name="coupon_name" value="<?php echo $coupon['coupon_name'];?>">
                    <input type="hidden" name="coupon_price" value="<?php echo $coupon['coupon_price'];?>">
                    <br>
                    <button type="submit" name="addCoupon" class="btn btn-outline-dark">select</button>
                  </form> 
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <br>
        <br>
        <!-- container -->
        </div>
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