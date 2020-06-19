<?php
    include 'adminMenu.php';

    $ReservationList = $Hairsalon->displayReservation();

?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Font awesome icon -->
     <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>
    <style>
      h3{
        font-family: 'Oleo Script', cursive;
      }
      #main{
        min-height: 630px;
      }
      #table{
        border: 2px solid black;
      }
    </style>
  </head>
  <body>
      

    <div class="container mb-0" id="main">
      <div class="row mt-5">
        <div class="col-lg-9">
          <h3 class="display-4">All reservation</h3>
        </div>
        <div class="col-lg-3">
          <a href="reserve_by_admin.php" class="btn float-right"><i class="far fa-plus-square fa-3x"></i><br>add reserve</a>
        </div>
      </div>


      <div id="table">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>reservation id</th>
              <th colspan="2">appoint time</th>
              <th>customer id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th colspan="2">Menu</th>
              <th>Price</th>
              <th>Nomination</th>
              <th>Option</th>
            </tr>
          </thead>
          <?php
            
            foreach($ReservationList as $row ){
                $reserveID=$row['reserve_id'];
                
                echo"<tbody id=''>";
                  echo "<td>".$row['reserve_id']."</td>";
                  echo "<td>".$row['reserve_date']."</td>";
                  echo "<td>".$row['reserve_hour']."</td>";
                  echo "<td>".$row['c_id']."</td>";
                  echo "<td>".$row['fname']."</td>";
                  echo "<td>".$row['lname']."</td>";
                  echo "<td>";
                            $selected_cID=$row['order_menu'];
                            $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);
                            echo $Selected_coupon['coupon_name'];
                  echo "</td>";
                  echo "<td>";
                            $selected_sID=$row['add_menu'];
                            $selected_service=$Hairsalon->getSelectServiceID($selected_sID);
                            echo $selected_service['service_name'];
                  echo "</td>";
                  echo "<td>¥".$row['total_price']."</td>";
                  echo "<td>".$row['nomination']."</td>";
                  echo "<td><a href='editReservation.php?reserve_id=$reserveID' role='button' class='btn btn-outline-dark'>edit</a></td>";
                echo "</tbody>";
              }
            ?>
        </table>
      </div>


    </div>
    <!-- footer -->
    <nav class="nav navbar bg-dark" id="footer">
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