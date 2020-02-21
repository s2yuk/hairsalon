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
      <div class="alert alert-dark">
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
                          echo "<form action='hairsalonAction.php' method='post'>"; 
                              echo "<input type='hidden' name='selectStylist' value='".$row['staff_id']."' >";
                              echo "<button type='submit' name='addBooking3' class='btn btn-outline-dark btn-sm'>SELECT</button>";
                          echo "</form>";
                      echo " </div>";

                echo " </div>";   

              }
              ?>
              <!-- row -->
            </div>
            <div class="mt-4">
              <p>* Assistant can be selected for shampoo or Treatment only</p>
            </div>
            
            
      </div>
            <br>
      <div class="row">
          <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect3" class="btn btn-dark m-2">Previous page</button>
          </form>
      </div> 
    <!--container  -->
  </div>

    <br><br>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>