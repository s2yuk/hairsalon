<?php 
include 'userMenu.php';
$_SESSION['service_id'];

$staffList=$Hairsalon->displayStaff();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>booking step 3</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
  
    <style>
      body{
        margin-top:100px;
        /* height: 600px;
        overflow: scroll; */
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
    <div class="container bg-light text-monospace text-center">        
      <br>
      <div class="alert alert-dark ">
          <h5 class="text-monospace p-3">Step 3</h4>
          <p class="text-monospace"> select stylist</p>
      </div>

     
       <div class="container">
                <div class="row">
                    <?php 
                    
                    foreach($staffList as $row){
                        echo "<div class='col-lg-2'>";
                        
                            echo "<p class='text-uppercase'>".$row['position']."</p>";
                            
                            if(!empty($row['staff_photo'])){
                                $sphoto = $row['staff_photo'];
                                echo "<img src='upload/admin/$sphoto' alt='".$row['staff_name']."' class=' '>";
                            }else{
                                echo "<img src='asset/logo.jpg' alt='image printing' class=''>";
                            }
                    
                            echo " <p class='text-monospace'>";
                                echo $row['staff_name'];
                            echo "</p>";
                           
                            // echo "<p>".$row['staff_gender']."</p>";
                            // echo "<p>".$row['staff_bio']."</p>";

                        

                            echo "<div class='text-center'>";
                                echo "<form action='' method='post'>"; 
                                    echo "<button type='submit' name='".$row['staff_id']."' class='btn btn-outline-dark btn-sm'>SELECT</button>";
                                echo "</form>";
                            echo " </div>";

                            echo " </div>";   

                            }
                            ?>
                    </div>
                </div>
            <br>
        </div>



        <!-- <div class="row mt-5">
            <div class="col-lg-3">   
                <h4 class="text-monospace">Producer</h4>
            </div>
            <div class="col-lg-3">
                <h5 class="text-monospace">Manager</h5>
            </div>
            <div class="col-lg-6">
                <h5 class="text-monospace">Stylist</h5>
            </div>
        </div>        
        <div class="row">
            <div class="col-lg-3">
                <figure>
                
                    <img src="asset/staff1.jpg" alt="producer">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">Yuya <br> Yamaguchi</p>     
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff1"  class="btn btn-outline-dark btn-sm">SELECT</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                    <figure>
                        <img src="asset/staff2.jpg" alt="Manager">
                        <figcaption class="text-center">
                            <p class="text-monospace p-3">Yasuaki <br> Ogawa</p>
                        </figcaption>
                    </figure>
                    <div class="text-center">
                        <form action="" method="post">
                            <button type="submit" name="staff2"  class="btn btn-outline-dark btn-sm">SELECT</button>
                        </form>
                    </div>
            </div>
            <div class="col-lg-2">
                    <figure>
                        <img src="asset/staff3.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3"><br>KOUSUKE</p>
                    </figcaption>
                    <div class="text-center">
                        <form action="" method="post">
                            <button type="submit" name="staff3"  class="btn btn-outline-dark btn-sm">SELECT</button>
                        </form>
                    </div>
            </div>
            <div class="col-lg-2">
                <figure>
                    <img src="asset/staff4.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">Ery<br>Hiramoto</p>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff4"  class="btn btn-outline-dark btn-sm">SELECT</button>
                    </form>
                </div>

            </div>
            <div class="col-lg-2">
                <figure>
                    <img src="asset/staff5.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">You<br>Ichijo</p>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff5"  class="btn btn-outline-dark btn-sm">SELECT</button>
                    </form>
                </div>
            
            </div>
           
        </div> -->









        <!--container  -->
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>