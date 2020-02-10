<?php 
include adminMenu.php;
$staffList =$Hairsalon->displayStaff();


?>
<!doctype html>
<html lang="en">
  <head>
    <title>add catalog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <div class="row">
        <div class="col-lg-4">
            <div class="bg-light border border-dark">
            <form action="" method="post" enctype="multipart/form-data">

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
                            foreach($staffList as $row){
                              $staffList =$row['staffname'];
                              echo "<option value='".$row['staff_name']."'> ".$row['staff_name']."</option>";
                            }
                          ?>
                          </select>
                      </div>
                    </div>

                  <button type="submit" name="upload" class="btn btn-dark mt-3 float-right">upload</button>
                </div>
              </div>
                    
            </form>
          </div> 
        </div>
        <div class="col-lg-8">
        
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>