<?php
    include 'adminMenu.php';

    $ReservationList = $Hairsalon->displayReservation();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit reserve</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      

    <div class="jumbotron">
    <div class=" bg-light border border-dark">
        <p class="text-monospace display-4">ALL reservation:  <?php //echo count($TodaysReservation)?></p>  
       

        <table class="table table-hover">
          <thead>
            <tr>
              <th>#reservation id</th>
              <th colspan="2">appoint time</th>
              <th>#customer id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th colspan="3">Menu</th>
              <th>Price</th>
              <th>Nomination</th>
              <th>Option</th>


            </tr>
          </thead>
          <?php
            
            foreach($ReservationList as $row ){
                $reserveID=$row['reserve_id'];
                
                echo"<tbody id=''>";
                  echo "<th>".$row['reserve_id']."</th>";
                  echo "<th>".$row['reserve_date']."</th>";
                  echo "<th>".$row['reserve_hour']."</th>";
                  echo "<th>".$row['c_id']."</th>";
                  echo "<th>".$row['fname']."</th>";
                  echo "<th>".$row['lname']."</th>";
                  echo "<th>".$row['order_menu']."</th>";
                  echo "<th>".$row['order_menu2']."</th>";
                  echo "<th>".$row['add_menu']."</th>";
                  echo "<th>¥".$row['total_price']."</th>";
                  echo "<th>".$row['nomination']."</th>";
                  echo "<th><a href='editReservation.php?reserve_id=$reserveID' role='button'  class='btn btn-outline-dark'>edit</a></th>";
                  
                echo "</tbody>";
              }
            
            ?>
      
        
        </table>
        </div>


    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>