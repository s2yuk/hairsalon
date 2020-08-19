<?php
include 'hairsalonAction.php';

// echo $_SESSION['loginid'];
$loginid=$_SESSION['loginid'];
$currentUser = $Hairsalon->getOneUser($loginid);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>smile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="asset/css/navbar.css">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
  </head>
  <body>

  <header>
    <div class="container">
      <div class="menu-icon">
        <span><i class="fas fa-bars"></i></span>
      </div>
      <div class="header-left">
        <a href="dashboard.php"><img src="asset/smile_logo.png" id="logo"></a>
      </div>
      <div class="header-center">
        <ul>
          <li class="nav-item">
              <a href="aboutUsJp.php" class="nav-link">About us</a>
          </li>
          <li class="nav-item">
              <a href="hairCatalog.php" class="nav-link">Catalog</a>
          </li>
          <li class="nav-item">
              <a href="service.php" class="nav-link">Service</a>
          </li>
          <li class="nav-item">
              <a href="stylist.php" class="nav-link">Stylist</a>
          </li>
          <li class="nav-item">
              <a href="booking.php" class="nav-link">Booking</a>
          </li>
          <li class="nav-item">
              <a href="testimonial.php" class="nav-link">Testimonial</a>
          </li>
          <li class="nav-item">
              <a href="contactpage.php" class="nav-link">Contact</a>
          </li>
          <?php  if(!empty($_SESSION['loginid'])){
                  
              echo "<li class='nav-item mr-lg-2 active'>";
              echo "<a href='mypage.php' class='nav-link'>My page</a>";
              echo"</li>";
              } ;
          ?>
        </ul>
      </div>
      <div class="header-right">
        <?php
          if(!empty($_SESSION['loginid'])){
              echo "";
              echo "<a href='logout.php' id='greet'>Hello ".$currentUser['fname']."さん<br> Logout</a>";
          }else{
              echo "";
              echo "<a href='login.php'  class=''>Login</a>";
          }
        ?>          
      </div>
    </div>
  </header>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>