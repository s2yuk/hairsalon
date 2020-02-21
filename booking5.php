<?php
    include 'userMenu.php';

    $loginid=$_SESSION['loginid'];
    $currentUser = $Hairsalon->getOneUser($loginid);

    $selected_sID =$_SESSION['service_id'];
    $Selected_service =$Hairsalon->getSelectServiceID($selected_sID);
  
    $selected_cID = $_SESSION['coupon_id'];
    $Selected_coupon =$Hairsalon->getSelectCouponID($selected_cID);

    $selected_stylistID =$_SESSION['select_stylist'];
    $selected_stylist =$Hairsalon->getSelectedStylist($selected_stylistID);

    $selectedAdditionalMenu = $_SESSION['booking2_id'];
    $selected_AddMenu =$Hairsalon->getSelectedAddMenu($selectedAdditionalMenu);


?>
<!doctype html>
<html lang="en">
  <head>
    <title>booking5</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  
    <style>
      body{
        margin-top:100px;
        /* height: 600px;
        overflow: scroll; */
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
    </style>

</head>
  <body>

      <div class="container bg-light text-monospace text-center">
          <h4 class="display-4 p-3">Booking</h4>
      </div>
      <div class="container bg-light ">
          <div class="col-lg-4">
                  <form action="hairsalonAction.php" method="post">
                    <button type="submit" name="reselect5" class="btn btn-outline-dark m-2">Re select</button>
                  </form>
                </div> 
          <div class="alert alert-dark text-center text-monospace">
              <h5 class="p-3">Confirmation</h5>
          </div>
          <div class="w-75 border mx-auto text-capitalize m-3 p-3 text-monospace">
             
                 <div class="row ml-5">
                    <div class="col-lg-4">
                            customer ID
                    </div>
                    <div class="col-lg-7">
                        <?php
                            echo $_SESSION['loginid'];
                        ?>
                    </div>
                </div>
                <div class="row mt-3 ml-5">
                    <div class="col-lg-4">
                        name
                    </div>
                    <div class="col-lg-8 ">
                        <?php
                            echo $currentUser['fname']," ".$currentUser['lname'];

                        ?>
                    </div>
                </div>
                <div class="row mt-3 ml-5">
                    <div class="col-lg-4">
                        select time
                    </div>
                    <div class="col-lg-8">
                        <?php
                            echo $_SESSION['selected_date'];
                            echo " ";
                            echo $_SESSION['hour'];
                        ?>
                    </div>
                </div>
                <div class="row  mt-3 ml-5">
                    <div class="col-lg-4">
                        <!-- booking.php -->
                        Select menu   
                    </div>
                    <div class="col-lg-8">
                        <?php
                            // echo "#";
                            // echo $_SESSION['coupon_id'];
                            echo $Selected_coupon['coupon_name'];
                            // echo $_SESSION['service_id'];
                            echo $Selected_service['service_name'];
                        ?>
                    </div>
                </div>
                <div class="row  mt-3 ml-5">
                    <div class="col-lg-4">
                        Additional menu
                    </div>
                    <div class="col-lg-8">
                        <?php
                            //booking2
                            // echo $_SESSION['booking2_id'];
                            echo $selected_AddMenu['service_name'];
                            
                            

                        ?>
                    </div>
                </div>
                <div class="row  mt-3 ml-5">
                    <div class="col-lg-4">
                        Price
                    </div>
                    <div class="col-lg-8">
                        <?php
                            echo $Selected_coupon['coupon_price'];
                            echo $Selected_service['price'];
                            echo " + ";
                            echo $_SESSION['booking2_price'];
                           
                            echo "  =  Total :";
                            $totalPrice=  $Selected_coupon['coupon_price'] + $Selected_service['price'] + $_SESSION['booking2_price'];
                            echo $totalPrice;
                        ?>
                    </div>
                </div>
                <div class="row  mt-3 ml-5">
                    <div class="col-lg-4">
                        select stylist
                    </div>
                    <div class="col-lg-8">
                        <?php
                            // echo $_SESSION['select_stylist'];
                            echo $selected_stylist['staff_name'];

                        ?>
                    </div>
                </div>

          </div> 
          <div class="alert alert-dark w-50 mx-auto m-3 text-center">
              <p>Please make sure your entery. <br>
              Can we proceed with the reservation?</p>
              <div class="row">  
                <div class="col-lg-12">
                    
                    <!-- <a href='booking6.php' role='button' class='btn btn-dark btn-block'>RESERVE</a> -->
                      
                    <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="fname" value="<?php echo $currentUser['fname']?>">
                        <input type="hidden" name="lname" value="<?php echo $currentUser['lname']?>">
                        <input type="hidden" name="order" value="<?php echo $Selected_coupon['coupon_name']?>">
                        <input type="hidden" name="order2" value="<?php echo $Selected_service['service_name']?>">
                        <input type="hidden" name="addMenu" value="<?php echo $selected_AddMenu['service_name']?>">
                        <input type="hidden" name="price" value="<?php echo $totalPrice?>">
                        <input type="hidden" name="nomination" value="<?php echo $selected_stylist['staff_name']?>">


                        <button type="submit" name="reserve" class='btn btn-dark btn-block text-monospace'>R E S E R V E</button>
                    </form>
                    
                </div>
              </div>
          </div>
          

         
      </div>


   





      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>