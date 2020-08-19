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
    <title>Smile admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">

    <style>
        .navbar{
            /* height:150px; */
        }
       #logo{
           height: 55px;
       }
   </style>
 </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#contentId" aria-expanded="false"
                    aria-controls="contentId" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="contentId">
                <ul class="nav navbar navbar-nav mr-auto mt-lg-0">
                    <li class="nav-item mr-lg-2 active">
                        <a href="dashboard.php" target="_blank" class="mr-5">
                            <img src="asset/smile.jpg" alt="logo" id="logo">
                        </a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="admin.php" class="nav-link active">Admin Top</a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="addCatalog.php" class="nav-link active">Catalog</a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="addService.php" class="nav-link active">Service</a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="addStaff.php" class="nav-link active">Staff</a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="userList.php" class="nav-link active">Customer List</a>
                    </li> 
                    <li class="nav-item mr-lg-2 active">
                        <a href="reservation.php" class="nav-link active">Reservation</a>
                    </li>
                    <li class="nav-item mr-lg-2 active">
                        <a href="msg_list.php" class="nav-link active">Message</a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto collapse navbar-collapse float-right text-white" id="contentId">
                <ul class="nav nav-bar">
                    <li class="nav-item">
                        <?php
                        if(!empty($_SESSION['loginid'])){
                            echo "Hello ".$currentUser['fname'] ;
                            echo "<a href='logout.php' role='button' class='btn btn-outline-light ml-2'>Logout</a>";
                        }else{
                            echo "<p class='text-warning'>login plz!</p>";
                            echo "<a href='login.php' role='button' class='btn btn-outline-light ml-2'>Login </a>";
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