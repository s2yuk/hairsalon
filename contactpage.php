<?php
include 'userMenu.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <title>contact/access</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style>
        
        body{
          margin-top:100px;
          height: 700px;
          background-image: url(asset/logo1.jpeg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
        }
      </style>


</head>
  <body>
    <div class="container w-50 bg-light mt-4 text-monospace">
        <h1>Contact us :)</h1>
        <form action="hairsalonAction.php" method="post">
            
                <!-- <legend>Contact us</legend> -->

                <input type="text" name="name" required value="name" maxlength="20" class="form-control">
                <br>
                <input type="email" name="email" required value="Email" class="form-control">
                <br>
            <div class=row>
              <div class="col-lg-6">
                <label for="">Chose your gender</label>
              </div>
              <div class="col-lg-6">
                <input type="radio" name="gender" value="male">Male    
                <input type="radio" name="gender" value="female">female
              </div>     
            </div>

            <div class="row">
              <div class="col-lg-6">
                <label for="service">Which service do you want?</label>
              </div>
              <br>
              <div class="col-lg-6">
                <input type="checkbox" name="service" value="hair">Hair  
                <input type="checkbox" name="service" value="nail">Nail  
                <input type="checkbox" name="service" value="Eyelash">Eyelash  
              </div>         
            </div>
              <br>    
            <div>
                    <label for="">Which stylist do you prefere?</label>
                    <select name="stylist" id="" class="form-control">
                        <option value="Manager">Manager</option>
                        <option value="t-stylist1">Top stylist1</option>
                        <option value="t-stylist"2>Top stylist2</option>
                        <option value="stylist">Stylist1</option>
                        <option value="stylist">Stylist1</option>
                        <option value="assistant">assistant</option>
                    </select>
            </div>  
             <br>
            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control">Comment</textarea>
              <br>
            <div>
                <label for="">If you have any referance image photo, please let me know.</label>
                <input type="file" name="imagephoto">
            </div>
              <br>
            <button type="submit" name="sent" class="btn btn-block btn-outline-dark mt-3">sent</button>
              <br>
        </form>
    </div>

    <div class="container w-75 mt-3 bg-light text-monospace text-center" id="access">
    <br>
      <h3>Access</h3>
      <br>
      <h5>Address:
          <a href="https://goo.gl/maps/MXTUbCnBdhHb4JZ58" target="_blank">4-15-4 Jingu-mae, Omotesando, Shibuya-city, Tokyo</a>
      </h5>
      <br>
      <p>
          5 mins by walk from nearlest subway station:  Omotesando (Exit A2)
      </p>
      <br>
    </div>
    <br>
    <br>
    <br>
    <br>




    <!-- footer -->
    <nav class="nav navbar bg-dark mt-5">
      <a class="" href="dashboard.php" >Go to top</a>
      <p class="text-light">copyright@ Yuka</p>
      <a href="contactpage.php">contact</a>
        
    </nav>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>