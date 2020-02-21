<?php
include 'adminMenu.php';

$staffList =$Hairsalon->displayStaff();

// $today= date('Y/m/d');
$today = new DateTime();
$dateToday = $today->format('Y-m-d');

$TodaysReservation = $Hairsalon->displayTodaysReservation($dateToday);
$latest_reservation = $Hairsalon->displayLatestReservation();


?>

<!doctype html>
<html lang="en">
  <head>
    <title>hairsalon dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      
    <style>
    
      #todaystable{
        height : 400px;
        overflow: scroll;
      }
      #latestTable{
        height : 300px;
        overflow: scroll;
      }
    
      
    </style>
    
  </head>
  <body>

  
      <!-- <header></header> -->
    <div class="jumbotron bg-light">      
      <!-- <div class="row">       -->
       
        <div class="row bg-light border border-dark" id="todaystable">
          <div class="col-lg-8">
            <p class="text-monospace display-4 mt-3">Today's reservation:  <?php echo count($TodaysReservation)?></p>  
          </div>
          <div class="col-lg-4 text-right mt-5">
            <a href="reservation.php" role="button" class="btn btn-dark">go to  All reservation</a>
          </div>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#reserve id</th>
              <th colspan="2">appoint time</th>
              <th>#customer id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th colspan="3">Menu</th>
              <th>Price</th>
              <th>Nomination</th>

            </tr>
          </thead>
          <?php
            
            foreach($TodaysReservation as $row ){
                echo"<tbody id='TodaysTable'>";
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
                echo "</tbody>";
              }
            
            ?>
      
        
        </table>
        </div>
        <br>
        <div class=" border border-dark" id="latestTable">
          <h3 class="text-monospace">Latest reservation:</h3>
          <!--repeat table -->
          <table class="table table-hover" >
          <thead class="bg-dark text-light">
            <tr>
              <th>#reserve id</th>
              <th colspan="2">appoint time</th>
              <th>#customer id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th colspan="3">Menu</th>
              <th>Price</th>
              <th>Nomination</th>

            </tr>
          </thead>
          <tbody>
            <?php
            
              foreach($latest_reservation as $row2 ){
                echo"<tbody id=''>";
                  echo "<th>".$row2['reserve_id']."</th>";
                  echo "<th>".$row2['reserve_date']."</th>";
                  echo "<th>".$row2['reserve_hour']."</th>";
                  echo "<th>".$row2['c_id']."</th>";
                  echo "<th>".$row2['fname']."</th>";
                  echo "<th>".$row2['lname']."</th>";
                  echo "<th>".$row2['order_menu']."</th>";
                  echo "<th>".$row2['order_menu2']."</th>";
                  echo "<th>".$row2['add_menu']."</th>";
                
                  echo "<th>¥".$row2['total_price']."</th>";
                  echo "<th>".$row2['nomination']."</th>";
                echo "</tbody>";

              }
            
            ?>
      
        
          </tbody>
        </table>


          


        </div>

    

      <!-- </div> row-->


      <div class="row mt-5">
        <div class="col-lg-6">
<!-- addNews -->
          <div class=" bg-light border border-dark">
              <form action="" method="post">  
                    <div class="card">
                      <div class="card-header">
                          <h3 class="text-monospace">add  News:</h3>
                      </div>
                      <div class="card-body"> 
                        <div class="row">
                          <div class="col-lg-3 text-right">
                            <label for=""> news content : </label>
                          </div>
                          <div class="col-lg-9">
                            <textarea name="news" id="" cols="50" rows="5"></textarea>
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-3 text-right">
                            <label for=""> date : </label>
                          </div>
                          <div class="col-lg-9">
                            <input type="date" name="date">
                          </div>
                        </div>
                          <button type="submit" name="submit" class="btn btn-dark mt-3 float-right">submit</button>  
                      </div>
                    </div>
                </form>           
          </div>
        </div>

<!-- add catalog -->
        <div class="col-lg-6">
          <!-- <div class="bg-light border border-dark">
            <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">

              <div class="card">
                <div class="card-header">
                    <h3 class="text-monospace">add catalog:</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 text-right">
                         <label for="">photo :</label>
                      </div>
                      <div class="col-lg-9">
                         <input type="file" name="catalog_photo" id="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 text-right">
                        <label for="">photo comment :</label>
                      </div>
                      <div class="col-lg-9">
                       <textarea name="catalog_comment" id="" cols="50" rows="5"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 text-right">
                        <label for="">stylist :</label>
                      </div>
                      <div class="col-lg-9">
                        <select name="photo_stylist" id="">
                          <?php 
                            //foreach($staffList as $row){
                            //  $staffList =$row['staffname'];
                            //  echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                           // }
                          ?>
                          </select>
                      </div>
                    </div>

                  <button type="submit" name="upload" class="btn btn-dark mt-3 float-right">upload</button>
                </div>
              </div>
                    
            </form>
          </div>  -->
        </div>
      </div>

      
  
    </div>  


<!-- footer -->
    <nav class="nav navbar  bg-dark">
      <a class="" href="#!" >go to top</a>
      <p class="text-light">copyright@ Yuka</p>
      <a href="">access</a>
        
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>