<?php
include 'userMenu.php';
$addMenuList =$Hairsalon->displayServiceMenu();
$serviceID =$menu['sevice_id'];

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
        
       

          <!-- form いる？ -->
      <form action="" method="get">
       
        <div class="w-75 mx-auto">

      
        <h4>Coupon</h4>
        <!-- 1 -->
        <!-- if you are first time .... -->
        
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  first visit .... <br>
                  <p class=" display-5 text-black-50">*except: <br> Yamaguchi & Ogawa</p>

                </div>
                <div class="col-lg-4">
                  each menu 15%OFF
                </div>
                <div class="col-lg-2">
                  <a href="booking2.php">select</a>
                  <!-- <button type="submit" name="order1" class="btn btn-outline-dark">select</button> -->
                </div>


              </div>
            </div>
          </div>

          <!-- 2 -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  color <br>
                  <p class=" display-5 text-black-50">*except: <br> Yamaguchi & Ogawa</p>
                  
                </div>
                <div class="col-lg-4">
                  ¥   13000
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order2" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>


          <!-- 3 -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  color + teratment <br>
                  <p class=" display-5 text-black-50">*except: <br> Yamaguchi & Ogawa</p>
                  
                </div>
                <div class="col-lg-4">
                  ¥   15000
            
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order3" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>


          <!-- 4 -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  perm <br>
                  <p class=" display-5 text-black-50">*except: <br> Yamaguchi & Ogawa</p>
                  
                </div>
                <div class="col-lg-4">
                  ¥   13000
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order1" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>


          <!-- 5 -->
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  perm + treatment  <br>
                  <p class=" display-5 text-black-50">*except: <br> Yamaguchi & Ogawa</p>
                  
                </div>
                <div class="col-lg-4">
                  ¥   15000
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order1" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>

         


          <p class="text-left">Ogawa</p>
     
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  color <br>
                  
                </div>
                <div class="col-lg-4">
                  ¥   15950
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order1" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>



          <p class="text-left">Yamaguchi</p>  
     
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                <img src="asset/logo.jpg" alt="">
                </div>
                <div class="col-lg-4">
                  cut +  color <br>
                  
                </div>
                <div class="col-lg-4">
                  ¥   16500
                </div>
                <div class="col-lg-2">
                  <button type="submit" name="order1" class="btn btn-outline-dark">select</button>
                </div>
              </div>
            </div>
          </div>





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
                    <?php echo "<a href='booking2.php?service_id=$serviceID' role='button' class='btn btn-outline-dark'>select</a>"
                      ?>

                </div>


              </div>
            </div>
          </div>


        <?php endforeach; ?>




        <br><br>
        <!-- container -->
        </div>
        
      </form>
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