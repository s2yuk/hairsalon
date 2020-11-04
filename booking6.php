<?php
include 'navbar.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <title>booking 6 </title>
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
        /* height: 500px; */
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
      #booking{
        background-color: rgba(255, 255, 255, 0.8);
      }
      #thankyou{
        font-family: 'Oleo Script', cursive;
        margin-top:300px;
        padding:20px; 
      }
      div h3{
        font-family: 'Oleo Script', cursive;
      }
      .container{
          width: 50%;
          margin: 0 auto;
        }
      /* --------------------------------- */
      footer{
        position: fixed;
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
        footer{
          position: relative;
          top: 180px;
        }
      }
      @media(max-width:670px){
        .container{
          width:95%;
        }
      }
    </style>
</head>
<body>
  <div class="container">
    <div class="text-center rounded mt-5" id="booking"> 
      <h1 class="display-4"id="thankyou">Thank you !</h1>
      <h3>We receive your reservation. See you soon.</h3>
      <p>ご予約ありがとうございます。ご来店お待ちしております。</p>
    </div>
  </div>
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