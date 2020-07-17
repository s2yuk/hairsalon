<?php
include 'hairsalonAction.php';

// echo $_SESSION['loginid'];
$loginid=$_SESSION['loginid'];
$currentUser = $Hairsalon->getOneUser($loginid);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Smile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">

    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    
    <style>
        #menu{
            height:80px;
        }
        #logo{
            height:55px;
        }
    </style>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"　id="menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav nav navbar mr-auto mt-lg-0">
                <li class="nav-item active">
                    <a href="dashboard.php" class="nav-link mr-lg-5 mr-sm-0"><img src="asset/smile.jpg" alt="logo" id="logo"></a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="aboutUs.php" class="nav-link">About us</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="hairCatalog.php" class="nav-link">Catalog</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="service.php" class="nav-link">Service</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="stylist.php" class="nav-link">Stylist</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="booking.php" class="nav-link">Booking</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="testimonial.php" class="nav-link">Testimonial</a>
                </li>
                <li class="nav-item mr-lg-2 active">
                    <a href="contactpage.php" class="nav-link">Contact/Access</a>
                </li>
                <?php  if(!empty($_SESSION['loginid'])){
                       
                    echo "<li class='nav-item mr-lg-2 active'>";
                    echo "<a href='mypage.php' class='nav-link'>My page</a>";
                    echo"</li>";
                    } ;
                ?>
            </ul>
        </div>
        <div class="ml-auto　collapse navbar-collapse　float-right">
            <ul class="nav nav-bar">
                <li class="nav-item">
                    <?php
                        if(!empty($_SESSION['loginid'])){
                            echo "Hello ".$currentUser['fname']."!";
                            echo "<a href='logout.php' role='button' class='btn btn-outline-dark ml-2'>Logout</a>";
                        }else{
                            echo "Welcome Guest";
                            echo "<a href='login.php' role='button' class='btn btn-outline-dark ml-2'>Login </a>";
                        }

                    ?>             
                </li>
            </ul>
        </div>
    
    </nav>
      
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>