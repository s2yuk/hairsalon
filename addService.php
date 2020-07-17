<?php
    include 'adminMenu.php';
    $addMenuList= $Hairsalon->displayServiceMenu();
    $addCouponList =$Hairsalon->displayCouponMenu();
 
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>addService</title>
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

<div class="row mt-5">
    <div class="col-lg-4">

        <div class="container">
            <div class="card">
                <div class="card-header text-monospace">
                    <h3>Add service menu :</h3>
                </div>
                <div class="card-body">
                <form action="hairsalonAction.php" method="post">
                    <label for="">Enter service menu</label>

                    <input type="text" name="menuName" id="" placeholder="ex)stylistCut" class="form-control">
                    <br>
                    <label for="">Enter Price (Number only)</label> 
                    <input type="number" name="menuPrice" id="" placeholder="ex)6000" class="form-control">
                    <br>
                    <button type="submit" name="menuInput" class="btn btn-secondary float-right">Menu input　メニューに追加</button>
                
                </form>
                </div>
            <!-- card -->
            </div>
        <!-- container -->
        </div>
    </div>

    <div class="col-lg-8">
        <div class="container">
            <table class="table table-hover">
            <thead>
                    <tr>
                        <th>service id</th>
                        <th>service name</th>
                        <th>service price</th>
                        <th>option</th>
                    </tr>
            </thead>
                <tbody>
                    <?php 
                        foreach($addMenuList as $row){
                            $serviceID=$row['service_id'];

                            echo "<tr>";
                                echo "<td>".$row['service_id']."</td>";
                                echo "<td>".$row['service_name']."</td>";
                                echo "<td>".$row['price']."</td>";
                                echo "<th><a href='editService.php?service_id=$serviceID' role='button' class='btn btn-outline-dark'><i class='fas fa-edit'></i> edit</a></th>";                    
                            echo "</tr>";
                        }    
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /container -->
    </div>
</div>
<br>
<hr>
<br>
<div class="row mt-5">
    <div class="col-lg-4">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Add coupon</h3>
                </div>
                <div class="card-body">
                <form action="hairsalonAction.php" method="post">
                    <label for="">Enter coupon menu</label>

                    <input type="text" name="couponName" id="" placeholder="ex)Cut + perm " class="form-control">
                    <br>
                    <label for="">Enter Price (Number only)</label> 
                    <input type="number" name="couponPrice" id="" placeholder="ex)16000" class="form-control">
                    <br>
                    <button type="submit" name="couponInput" class="btn btn-secondary float-right">Coupon input　クーポンに追加</button>
                
                </form>
                </div>
            <!-- card -->
            </div>
        <!-- container -->
        </div>
    </div>

    <div class="col-lg-8">
        <div class="container">
            <table class="table table-hover">
            <thead>
                <tr>
                    <th>Coupon id</th>
                    <th>Coupon name</th>
                    <th>Coupon price</th>
                    <th>option</th>

                
                </tr>
            </thead>
                <tbody>
                <?php 
                    foreach($addCouponList as $row){
                        $couponID=$row['coupon_id'];

                        echo "<tr>";
                        echo "<td>".$row['coupon_id']."</td>";
                        echo "<td>".$row['coupon_name']."</td>";
                        echo "<td>".$row['coupon_price']."</td>";
                        echo "<th><a href='editCoupon.php?coupon_id=$couponID' role='button' class='btn btn-outline-dark'><i class='fas fa-edit'> edit</a></th>";

                        
                        echo "</tr>";
                        
                    }    
                    ?>
            
                </tbody>
            </table>
        </div>
        <!-- /container -->
    </div>
    <!-- /col -->
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