<?php
 include 'userMenu.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>dear guest </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        body{
           margin-top:150px;
        }
    </style>
</head>
  <body>
    <div class="container">
        <div class="card">
            <div class="card-header alert-warning" >
                <h3>Sorry guest</h3>
            </div>
            <div class="card-body">
                <div>
                    If you would like to continue, please log in :)
                    <a href ='login.php' role='button' class='btn btn-outline-dark ml-2'> >> Login </a>
                </div>
                <div class="mt-2">
                    or just looking          
                    <a href ='hairCatalog.php' role='button' class='btn btn-dark ml-2'>  >> Back to catalog</a> 
                    <a href ='booking4.php' role='button' class='btn btn-dark ml-2'>  >> Back to Booking</a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <nav class="nav navbar bg-dark fixed-bottom">
        <a href="dashboard.php" >Home</a>
        <p class="text-light">Copyright@ Yuka Matsumoto</p>
        <a href="contactpage.php">Contact</a>
    </nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>