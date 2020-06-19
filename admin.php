<?php
include 'adminMenu.php';

$staffList =$Hairsalon->displayStaff();

// $today= date('Y/m/d');
$date = new DateTime();
$today = $date->format('Y-m-d');
$TodaysReservation = $Hairsalon->displayTodaysReservation($today);
$todaysCount=$Hairsalon->todaysCount($today);
// print_r($todaysCount);
$numToday=$todaysCount['count(*)'];
// echo $numToday;

$latest_reservation = $Hairsalon->displayLatestReservation();

$msg_list = $Hairsalon->displayContact();

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
        max-height: 400px;
        overflow: scroll;
      }
      #latestTable{
        max-height : 400px;
        overflow: scroll;
      }
      #addnews{
        height: 328px;
      }
      #msg_list{
        height : 328px;
        overflow: scroll;
      }
      h3{
        font-family: 'Oleo Script', cursive;
      }
      
      
    </style>
    
  </head>
  <body>

  
  
    <div class="jumbotron m-0">      
        <div class="row bg-light border border-dark" id="todaystable">
          <div class="col-lg-8">
            <h3 class="display-4 mt-3">Today's reservation:  <?php echo $numToday; ?></h3>  
          </div>
          <div class="col-lg-4 text-right">
            <a href="reservation.php" role="button" class="btn btn-dark mt-4 mr-5 p-3">go to  All reservation</a>
          </div>
          
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#reserve id</th>
                <th colspan="2">appoint time</th>
                <th>#customer id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="2">Menu</th>
                <th>Price</th>
                <th>Nomination</th>

              </tr>
            </thead>
            <?php
              foreach($TodaysReservation as $row ){
                  echo"<tbody id='TodaysTable'>";
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
                  echo "</tbody>";
                }
            ?>          
          </table>
        </div>
        <br>
        <div class="row bg-light border border-dark" id="latestTable">
          <h3 class="p-3">Latest reservation:</h3>
          <!--repeat table -->
          <table class="table table-hover" >
            <thead class="bg-dark text-light">
              <tr>
                <th>#reserve id</th>
                <th colspan="2">appoint time</th>
                <th>#customer id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="2">Menu</th>
                <th>Price</th>
                <th>Nomination</th>

              </tr>
            </thead>
            <tbody>
              <?php
              
                foreach($latest_reservation as $row2 ){
                  echo"<tbody id=''>";
                    echo "<td>".$row2['reserve_id']."</td>";
                    echo "<td>".$row2['reserve_date']."</td>";
                    echo "<td>".$row2['reserve_hour']."</td>";
                    echo "<td>".$row2['c_id']."</td>";
                    echo "<td>".$row2['fname']."</td>";
                    echo "<td>".$row2['lname']."</td>";
                    // echo "<td>".$row2['order_menu']."</td>";
                    // echo "<td>".$row2['order_menu2']."</td>";
                    // echo "<td>".$row2['add_menu']."</td>";
                    echo "<td>";
                              $selected_cID=$row2['order_menu'];
                              $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);
                              echo $Selected_coupon['coupon_name'];
                    echo "</td>";
                    echo "<td>";
                              $selected_sID=$row2['add_menu'];
                              $selected_service=$Hairsalon->getSelectServiceID($selected_sID);
                              echo $selected_service['service_name'];
                    echo "</td>";
                  
                    echo "<td>¥".$row2['total_price']."</td>";
                    echo "<td>".$row2['nomination']."</td>";
                  echo "</tbody>";

                }
              
              ?>
        
          
            </tbody>
          </table>
        </div>
     


        <div class="row mt-5">
         <div class="col-lg-5">
            <!-- addNews -->
            <div class=" bg-light border border-dark" id="addnews">
              <form action="" method="post">  
                <div class="card">
                  <div class="card-header">
                      <h3 class="">add  News:</h3>
                  </div>
                  <div class="card-body"> 
                    <div class="row">
                      <div class="col-lg-3 text-right">
                        <label for=""> news <br> content : </label>
                      </div>
                      <div class="col-lg-9">
                        <textarea name="news" id="" cols="43" rows="5"></textarea>
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
          <div class="col-lg-7">
            <div class="bg-light border border-dark" id="msg_list">
              <h3 class="ml-3 p-2"> New Message received</h3>
              <table class="table table-hover">
                <thead>
                  <th>contact_id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>message</th>
                  <th></th>
                </thead>
                <div class="div">
                <?php foreach($msg_list as $row3) :?>
                <tbody>
                    <td><?php echo $row3['contact_id']?></td>
                    <td><?php echo $row3['contact_name']?></td>
                    <td><?php echo $row3['contact_email']?></td>
                    <td><?php echo $row3['comment'] ?></td>
                    <td><a href="msg_detail.php?contact_id=<?php echo $row3['contact_id'];?>" class="btn btn-dark">Read</a></td>
                </tbody>
                <?php endforeach ;?>
                </div>
                
              </table>
            </div>
          </div>
        </div>
        <!-- /row -->
    </div>  
    <!-- footer -->
    <nav class="nav navbar bg-dark">
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