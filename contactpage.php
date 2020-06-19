<?php
  include 'userMenu.php';
  $loginid=$_SESSION['loginid'];
  $currentUser = $Hairsalon->getOneUser($loginid);

  if(!empty($_SESSION['loginid'])){
    $login_email = $Hairsalon->getEmail($loginid);
    // echo "login Email:".$login_email['email'];
    $email = $login_email['email'];
  }

  $staffList =$Hairsalon->displayStaff();

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
        margin-top:150px;
        height: 700px;
        background-image: url(asset/logo1.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size :cover ;
      }
      div h5{
        font-family: 'Oleo Script', cursive;
      }
      #loginMsg{
        font-size: 10px;
      }

      </style>
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">



</head>
  <body>
    <div class="container w-50 bg-light mt-3 text-monospace">
        <h5 class="text-center display-4 p-3">Contact us</h5>
      
        <p class="text-center">TEL: 03-1234-5678</p>
        
        <br>
        <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
            
                <!-- <legend>Contact us</legend> -->
                <?php if(!empty($_SESSION['loginid'])) :?>
                  <input type="hidden" name="c_id" value="<?php echo $currentUser['loginid'];?>">
                <?php else :?>
                  <p id="loginMsg">
                    if you have an account please login.
                    <a href="login.php" class='badge badge-secondary ml-2 p-1'> >> Login <<</a>
                  </p>
                <?php endif;?>
                    
                <?php if(!empty($_SESSION['loginid'])) :?>
                  <input type="text" name="name" value="<?php echo $currentUser['fname']." ".$currentUser['lname']?>" class="form-control">
                <?php else :?>
                  <input type="text" name="name" required placeholder="name" maxlength="30" class="form-control">
                <?php endif;?>
                
                <br>
                <?php if(!empty($_SESSION['loginid'])) :?>
                  <input type="email" name="email" value="<?php echo $email;?>" id="" class="form-control">
                <?php else :?>
                  <input type="email" name="email" required placeholder="Email" class="form-control">
                <?php endif;?>
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
                <input type="checkbox" name="service" value="cut">Cut  
                <input type="checkbox" name="service" value="color">Color  
                <input type="checkbox" name="service" value="perm">Perm
              </div>         
            </div>
              <br>    
            <div>
                    <label for="">Which stylist do you prefere?</label>
                    <select name="stylist" id="" class="form-control">
                      <option value="no_choice">Chose stylist</option>
                      <?php 
                          foreach($staffList as $row){
                          $staffList =$row['staffname'];
                          echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                          }
                      ?>
                        
                    </select>
            </div>  
             <br>
            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Write here" required></textarea>
              <br>
            <div class="text-center">
                <label for="">If you have any referance image photo, please let me know.</label>
                <input type="file" name="photo">
                <button type="submit" name="sent" class="btn btn-block btn-outline-dark mt-5 w-75 mx-auto">sent</button>
            </div>
              <br>
              <br>
        </form>

    </div>

    <div class="container w-50 mt-3 bg-light text-monospace text-center" id="access">
    <br>
      <h5 class="display-4">Access</h5>
      <br>
        <p>Address:
          1-2-3 Omotesando, Shibuya-city, Tokyo</a>
        </p>
      <br>
      <p>
          5 mins by walk from nearlest subway station:  Omotesando (Exit A2)
      </p>
      <br>
    </div>
  
    <!-- footer -->
    <nav class="nav navbar bg-dark mt-5">
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