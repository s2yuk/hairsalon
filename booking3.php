<?php 
include 'navbar.php';

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
      #booking h5, .stylist-name{
        font-family: 'Oleo Script', cursive;
      }
      #stylist-photo{
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
  <div class="container bg-light text-monospace text-center rounded">        
     <div class="text-left">
          <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect3" class="btn btn-secondary m-2"> <i class="fas fa-angle-double-left"></i> Reselect　再選択</button>
          </form>
      </div> 
      <div class="alert alert-dark">
          <h5 class="text-monospace p-3">Step 3</h4>
          <p class="text-monospace"> select stylist</p>
          スタイリスト選択
      </div>
      <div class="container" id="select-wrapper">
          <div class="row">
              <?php 
              foreach($staffList as $row){
                echo "<div class='col-lg-2 col-md-4 col-sm-6 p-3 mb-3'>";
                      echo "<span class='text-uppercase'>".$row['position']."</span><br>";
                      
                      if(!empty($row['staff_photo'])){
                          $sphoto = $row['staff_photo'];
                          echo "<img src='upload/admin/$sphoto' alt='".$row['staff_name']."' id='stylist-photo'>";
                      }else{
                          echo "<img src='asset/smile.jpg' alt='image printing' class='w-100'>";
                      }
                      echo "<br>";
                      echo "<span class='stylist-name'><h4>";
                          echo $row['staff_name'];
                      echo "</h4></span>";
                      
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
              <p>* Assistant can be selected for shampoo or Treatment only　<br>
              アシスタントはシャンプーとトリートメントのみご指名いただけます。</p>
            </div>
            <div class="mt-2">
              <a href="booking4.php" class="btn btn-outline-secondary mt-2 p-3">指名しない<i class="fa fa-angle-double-right"></i></a>
            </div>
            
      </div>
            <br>
      <div class="text-center">
          <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect3" class="btn btn-secondary m-2"> <i class="fas fa-angle-double-left"></i> Previous page</button>
          </form>
      </div> 
    <!--container  -->
  </div>

    <br><br>

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