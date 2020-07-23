<?php
include 'adminMenu.php';

$serviceID = $_GET['service_id'];
$row =$Hairsalon->getForEditService($serviceID);


 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
      

  <div class="container mt-5">
    <div class="text-center">
      <a href="#service" class="btn btn-outline-dark p-3">MENU</a><a href="#coupon" class="btn btn-outline-dark p-3">Coupon</a>
    </div>
      <div class="card mt-5 w-50 mx-auto">
          <div class="card-header">
              <h3>Edit menu</h3>
          </div>
          <div class="card-body">
              <form action="hairsalonAction.php" method="post">
                <input type="hidden" name="serviceID" value="<?php echo $serviceID?>">
                <label for="">Enter new service name</label>
                <input type="text" name="service_name" id="" placeholder="<?php echo $row['service_name']?>" class="form-control" required>
                <br>
                <label for="">New price</label>
                <br>
                <input type="number" name="service_price" placeholder="<?php echo $row['price']?>" required>
                <br>

                <button type="submit" name="editService" class="btn btn-secondary btn-block mt-3"> Update 更新 </button>


              </form>
          </div>
          <div class="text-right">
                  <?php
                  echo "<a href='deleteService.php?service_id=$serviceID' role='button' class='btn btn-outline-danger mr-4'><i class='far fa-trash-alt'></i> delete </a>";
                  ?>
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