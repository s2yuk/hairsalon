<?php
include 'hairsalonAction.php';

// echo $_SESSION['loginid'];
$loginid=$_SESSION['loginid'];
$currentUser = $Hairsalon->getOneUser($loginid);

?>


<!doctype html>
<html lang="en">
  <head>
    <title>admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <nav class="nav navbar-expand fix-top bg-dark text-light p-2">
        <a href="dashboard.php" class="text-dark mr-5"><img src="asset/logo.jpg" alt="logo"></a>

            <div class="text-left">
            <ul class="nav nav-bar">
                <li class="nav-item">
                    <a href="admin.php" role="button" class="btn btn-outline-light mr-1">admin top</a>
                </li>
                <li class="nav-item">
                    <a href="addCatalog.php" role="button" class="btn btn-outline-light mr-1">add Catalog</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="catalog_fb.php" role="button" class="btn btn-outline-light mr-1">Catalog feedback</a>
                </li> -->
                <li class="nav-item">
                    <a href="addService.php" role="button" class="btn btn-outline-light mr-1">add Service</a>
                </li>
                <li class="nav-item">
                    <a href="addStaff.php" role="button" class="btn btn-outline-light mr-1">add staff</a>
                </li>
                <li class="nav-item">
                    <a href="userList.php" role="button" class="btn btn-outline-light mr-1">User List</a>
                </li> 
                <li class="nav-item">
                    <a href="reservation.php" role="button" class="btn btn-outline-light mr-1">Reservation</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="skillpage.php" role="button" class="btn btn-outline-light mr-1">skill page</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="contactpage.php" role="button" class="btn btn-outline-light mr-1">Contact/access</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="testimonial.php" role="button" class="btn btn-outline-light mr-1">testimonial</a>
                </li>   -->

            
            </ul>
            </div>

            <div class="ml-auto">
                    <ul class="nav nav-bar">
            
                        <li class="nav-item mr-2">
                            Hello 
                            <?php
                            if(!empty($_SESSION['loginid'])){
                                echo $currentUser['fname'] ;
                                echo "<a href='logout.php' role='button' class='btn btn-outline-light'>Logout</a>";
                            }else{
                                echo "<p class='text-warning'>login plz!</p>";
                                echo "<a href='login.php' role='button' class='btn btn-outline-light'>Login </a>";

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