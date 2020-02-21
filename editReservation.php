<?php 
    include 'adminMenu.php';

    $reserveID = $_GET['reserve_id'];
    $row = $Hairsalon->getReserveID($reserveID);

    $addCouponList =$Hairsalon->displayCouponMenu();
    $addMenuList =$Hairsalon->displayServiceMenu();

    $staffList =$Hairsalon->displayStaff();
    




?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit Reserve</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
     <div class="container">

        <form action="hairsalonAction.php" method="post">
            <input type="hidden" name="catalog_id" value ="<?php echo $reserveID ?>">


            <div class="card mt-3">
                <div class="card-header">
                    Edit Reservation
                </div>
                <div class="card-body">
                    <div class="bg-light">
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
                    </div>
                   
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            date
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['reserve_date']?>
                        </div>
                        <div class="col-lg-5">
                           <input type="date" name="" id="">
                        
                            
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            time
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['reserve_hour']?>
                        </div>
                        <div class="col-lg-5">
                            <select name="hour" id="">
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
                            menu
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['order_menu']?>
                        </div>
                        <div class="col-lg-5">
                            <form action="" method="post">


                          
                            <select name="coupon" id="">
                     
                                    <?php foreach ($addCouponList as $coupon){
                                        echo"<option value='coupon'>";
                                        echo $coupon['coupon_name'], " ¥".$coupon['coupon_price'];
                                        echo " </option>";
                                    }
                                    ?>    
                               
                            </select>
                            <select name="service" id="">
                                    
                                    <?php foreach ($addMenuList as $menu){
                                        echo"<option value='service'>";
                                        echo $menu['service_name'], " ¥".$menu['price'];
                                        echo " </option>";
                                    }
                                    ?>    
                                
                            </select>
                            <input type="hidden" name="coupon" value="<?php echo $coupon['coupon_id'];?>">
                            <input type="hidden" name="coupon_price" value="<?php echo $coupon['coupon_price'];?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            additional menu
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['add_menu1']," ".$row['add_menu2']," ".$row['add_menu3']?>
                        </div>
                        <div class="col-lg-5">
                            <!--  -->
                            <select name="addMenu" id="">
                                    
                                    <?php foreach ($addMenuList as $menu){
                                        echo"<option value='service'>";
                                        echo $menu['service_name'], " ¥".$menu['price'];
                                        echo " </option>";
                                    }
                                    ?>    
                                
                            </select>
                        </div>

                                <button type="submit" name="calculate">calculate</button>
                        </form>
                        <?php 
                         if(isset($_POST['calculate'])){
                             $coupon =$_POST['coupon'];
                             $
                         }
                        ?>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            price
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['total_price']?>
                        </div>
                        <div class="col-lg-5">
                            <!--  -->
                          
           

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-3">
                            nomination
                        </div>
                        <div class="col-lg-4">
                            <?php echo $row['nomination']?>
                        </div>
                        <div class="col-lg-5">
                            
                            <select name="n_nomination" id="">
                                <?php 
                                    foreach($staffList as $row){
                                    $staffList =$row['staffname'];
                                    echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="editReserve" class="btn btn-dark mt-3 form-control">Edit</button>

                    
                    
                </div>
                <div class="text-right">
                  <?php
                  echo "<a href='deleteReserve.php?reserve_id=$reserveID' role='button'  class='btn btn-outline-dark mr-4'>delete </a>";
                  ?>
              </div>
            </div>
        </form>



     </div>




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>