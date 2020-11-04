<?php
 include 'navbar.php';
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
        /* navbar with bootstrap */
        .menu-container, .header-center ul{
            position: fixed;
            top: 0;
        }
        /* ---------------------- */
        body{
           margin-top:150px;
        }
        @media(max-width:1000px){
            .header-center ul{
                position: fixed;
                top: 80px;
                left:50px;
                margin-left:0px;
            }
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
                    If you would like to continue, <br>
                    続けるにはログインしてください。 
                    <a href ='login.php' role='button' class='btn btn-outline-dark ml-2'> >> Login </a>
                </div>
                OR <br>
                <div class="mt-2">
                    just looking <br>
                    ログインせずに観覧<br>
                    <a href ='hairCatalog.php' role='button' class='btn btn-dark ml-2 mb-3 mb-lg-0'>  >> Back to catalog　カタログに戻る</a> 
                    <a href ='booking4.php' role='button' class='btn btn-dark ml-2'>  >> Back to Booking　予約に戻る</a>
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
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>