<?php
  include 'hairsalonAction.php';

  // echo $_SESSION['loginid'];
  $loginid=$_SESSION['loginid'];
  $currentUser = $Hairsalon->getOneUser($loginid);
?>
<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="asset/favicon.ico" />  
    <title>smile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- css -->
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/navbar.css">
    <!-- jQuery本体 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <div class="menu-container">
        <div class="menu-icon" id="menu-icon"> <!-- opend -->
          <button class="menu-icon__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        <div class="header__inner">
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
                  echo "<li class='nav-item'>";
                  echo "<a href='mypage.php' class='nav-link'>My page</a>";
                  echo "</li>";
                  };
              ?>
            </ul>
          </div>
          <div class="header-right">
            <?php
              if(!empty($_SESSION['loginid'])){
                  echo "<a href='logout.php' id='greet'>Hello ".$currentUser['fname']."<span class='font-small'>さん</span><br>Logout</a>";
              }else{
                  echo "<a href='login.php' class=''>Login</a>";
              }
            ?>          
          </div>
        </div>
      </div>
    </header>
  <!-- js -->

  <script type="text/javascript" src="asset/js/script.js"></script>
  </body>
</html>