<?php 
    include 'adminMenu.php';
    $CouponList =$Hairsalon->displayCouponMenu();
    $MenuList =$Hairsalon->displayServiceMenu();

    $staffList =$Hairsalon->displayStaff();
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style>
       h3{
        font-family: 'Oleo Script', cursive;
       }
   </style>
</head>
  <body>
      <div class="container">
      <a href="reservation.php" class="btn btn-outline-dark mt-3">Reservation list</a>

          <div class="card mt-2">
              <div class="card-header">
                    <h3>New Reservation</h3>
              </div>
              <div class="card-body">
                  <form action="hairsalonAction.php" method="post">
                <div class="row">
                    <div class="col-lg-3">
                        date
                    </div>
                    <div class="col-lg-9">
                        <input type="date" name="date" id="" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        hour
                    </div>
                    <div class="col-lg-9">
                        <select name="hour" id="" required>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="12:00">12:00</option>
                        <option value="13:00">13:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>
                        <option value="18:00">18:00</option>
                        <option value="19:00">19:00</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        name
                    </div>
                    <div class="col-lg-9">
                        <input type="text" name="fname" placeholder="first name" required>
                        <input type="text" name="lname" placeholder="last name" required> 
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        client id
                    </div>
                    <div class="col-lg-9">
                        <input type="text" name="c_id" id="" required>
                        *if client dont have client_id, enter "0".
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        coupon menu
                    </div>
                    <div class="col-lg-9">
                        <select name="order" id="" class="">
                            <option value="">-----</option>
                            <?php 
                                foreach ($CouponList as $coupon){
                                echo"<option value='".$coupon['coupon_id']."'>";
                                echo $coupon['coupon_name'], " ¥".$coupon['coupon_price'];
                                echo " </option>";
                                $coupon_price=$coupon['coupon_price'];
                            }  
                            ?>    
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        regular menu
                    </div>
                    <div class="col-lg-9">
                        <select name="addMenu" id="" class="">
                            <option value="">-----</option>
                            <?php 
                                foreach ($MenuList as $menu){
                                echo"<option value='".$menu['service_id']."'>";
                                echo $menu['service_name'], " ¥".$menu['price'];
                                echo " </option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        nomination
                    </div>
                    <div class="col-lg-9">
                        <select name="nomination" id="">
                            <option value="">-----</option>
                            <?php 
                                foreach($staffList as $row){
                                $staffList =$row['staffname'];
                                echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-3">
                        price
                    </div>
                    <div class="col-lg-9">  
                        
                    </div>
                </div>
                <div class="row mt-3">
                    <button type="submit" name="reserve_by_admin" class="btn btn-dark w-50 mx-auto">confirm</button>
                </div>
                </form>
              </div>
              <!-- /card-body -->
          </div>
          <!-- /card -->
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