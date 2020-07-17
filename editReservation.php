<?php 
    include 'adminMenu.php';

    $reserveID = $_GET['reserve_id'];
    $row = $Hairsalon->getReserveID($reserveID);

    $CouponList =$Hairsalon->displayCouponMenu();
    $MenuList =$Hairsalon->displayServiceMenu();

    $staffList =$Hairsalon->displayStaff();
    
    $selected_cID=$row['order_menu'];
    $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);
    $selected_sID=$row['add_menu'];
    $selected_service=$Hairsalon->getSelectServiceID($selected_sID);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit Reserve</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        h3{
            font-family: 'Oleo Script', cursive;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">
        <a href="reservation.php" class="btn btn-outline-dark mt-3">Reservation list</a>
        <form action="hairsalonAction.php" method="post"> 
            <!-- hairsalonAction.php -->
        <input type="hidden" name="reserve_id" value ="<?php echo $reserveID ;?>">
        <div class="card mt-2">
            <div class="card-header">
                <div class="row">
                <div class="col-lg-6">
                    <h3>Edit reservation</h3>
                </div>
                <div class="col-lg-6 text-right">
                    <?php
                    echo "<a href='deleteReserve.php?reserve_id=$reserveID' role='button'  class='btn btn-outline-danger'><i class='far fa-trash-alt'></i> delete </a>";
                    ?>
                </div>
                </div>
            </div>
            

            <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                reserve ID
                </div>
                <div class="col-lg-9">
                <?php echo $row['reserve_id']?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                customer ID
                </div>
                <div class="col-lg-9">
                <?php echo $row['c_id']?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                Name
                </div>
                <div class="col-lg-9">
                <?php echo $row['fname']," ".$row['lname']?>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                date
                </div>
                <div class="col-lg-9">
                <input type="date" name="n_date" id="" value="<?php echo $row['reserve_date']?>">
                </div>
            </div>
            <div class="row mt-3">
              <div class="col-lg-3">
                  time
              </div>
              <div class="col-lg-9">
                  <select name="hour" id="">
                      <option value="<?php echo $row['reserve_hour']?>" class="text-success">selected: <?php echo $row['reserve_hour']?></option>
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
            <div class="row mt-3">
                <div class="col-lg-3">
                Coupon menu
                </div>
                <div class="col-lg-9">
                    <select name="newCoupon" id="" class="">
                    <option value="<?php echo $row['order_menu']?>">selected: 
                        <?php 
                         if (empty($row['order_menu'])){
                            echo "-----";
                        }else{
                            echo $Selected_coupon['coupon_name'];
                        }
                        ?>
                    </option>
                    <option value="">nothing</option>
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
            <div class="row mt-3">
                <div class="col-lg-3">
                  Regular menu
                </div>
                <div class="col-lg-9">
                    <!-- <label for="">Additional menu</label> -->
                    <select name="newAddMenu" id="" class="">
                        <option value="<?php echo $row['add_menu']?>">selected: 
                        <?php 
                             if (empty($row['add_menu'])){
                                echo "-----";
                            }else{
                                echo $selected_service['service_name'];
                               
                            }
                        ?>
                        </option>
                        <option value="">nothing</option>
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
            <div class="row mt-3 ">
                <div class="col-lg-3">
                    nomination
                </div>
                <div class="col-lg-9">
                    <select name="n_nomination" id="">
                        <?php 
                            echo "<option value='".$row['nomination']."'>selected: ";
                            if (empty($row['nomination'])){
                                echo "-----";
                            }else{
                                echo $row['nomination'];
                            }
                            echo "</option>";

                            foreach($staffList as $row){
                            $staffList =$row['staffname'];
                            echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-3">
                    price
                </div>
                <div class="col-lg-9">
                    ¥<?php 
                    if(!empty($Selected_coupon['coupon_price'] and $selected_service['price'])){
                        echo $Selected_coupon['coupon_price']."+".$selected_service['price'];
                        $total = $Selected_coupon['coupon_price']+$selected_service['price'];
                        echo "=".$total;
                    }elseif(!empty($Selected_coupon['coupon_price'])){
                        $total = $Selected_coupon['coupon_price'];
                        echo $total;
                    }elseif(!empty($selected_service['price'])){
                        $total = $selected_service['price'];
                        echo $total;
                       
                    }
                    ?>
                </div>
            </div>
                    
            <button type="submit" name="editReserve" class="btn btn-secondary mt-3 btn-block w-50 mx-auto">Update 更新</button>
   
            </div>
            <!-- /card-body -->
        </div>
        <!-- /card -->
    </form>
    </div>
    <!-- /container -->

    <!-- footer -->
    <nav class="nav navbar bg-dark mt-5" id="footer">
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