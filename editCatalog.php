<?php
include 'adminMenu.php';
$staffList =$Hairsalon->displayStaff();

$catalogID = $_GET['catalog_id'];
$row2 = $Hairsalon->getCatalogID($catalogID);

// print_r($row2);


?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit catalog</title>
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

  <div class="bg-light border border-dark w-75 m-3 mx-auto">
            <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="catalog_id" value ="<?php echo $catalogID ?>">

              <div class="card text-monospace">
                <div class="card-header">
                    <h3>Edit catalog:</h3>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-lg-3 text-right">
                            <p>old photo:</p>
                        </div>
                        <div class="col-lg-9">
                        <?php
                            $oldCatalogPhoto = $row2['catalog_photo'];
                            echo "<img src='upload/admin/catalog/$oldCatalogPhoto' class='img-thumbnail w-50'>";
                        ?>
                        
                        </div>
                    
                    </div>
                    <div class="row">
                      <div class="col-lg-3 text-right">
                         <label for="">photo :</label>
                      </div>
                      <div class="col-lg-9">
                      
                         <input type="file" name="catalog_photo" id="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-lg-3 text-right">
                        <label for="">photo comment :</label>
                      </div>
                      <div class="col-lg-9">
                       <textarea name="catalog_comment" id="" cols="30" rows="10" placeholder="<?php echo $row2['catalog_comment']?>"></textarea>
                      </div>
                    </div>
                    <br>
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
                    <div class="text-center">
                      <button type="submit" name="editCatalog" class="btn btn-dark w-50 mt-5">Edit</button>
                    </div>
                </div>
              </div>
              <div class="text-right">
                  <?php
                  echo "<a href='deleteCatalog.php?catalog_id=$catalogID' role='button' class='btn btn-outline-danger m-2'>delete</a>";
                  ?>
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