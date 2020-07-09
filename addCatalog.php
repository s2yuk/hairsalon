<?php 
include 'adminMenu.php';
$staffList =$Hairsalon->displayStaff();
$hairCatalogList = $Hairsalon->displayCatalog();



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
    <style>
      h3{
        font-family: 'Oleo Script', cursive;
      }
    </style>
  </head>
  <body>
      
    <div class="row mt-3">
        <div class="col-lg-4">
          <div class="container">
          <div class="bg-light border border-dark">
            <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">

              <div class="card">
                <div class="card-header">
                    <h3 class="">add catalog:</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-3 text-center">
                         <label for="">photo:</label>
                      </div>
                      <div class="col-lg-9 text-center">
                         <input type="file" name="catalog_photo" id="">
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-lg-3 text-center">
                        <label for="">photo comment:</label>
                      </div>
                      <div class="col-lg-9">
                       <textarea name="catalog_comment" id="" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-lg-3 text-center">
                        <label for="">stylist:</label>
                      </div>
                      <div class="col-lg-9">
                        <select name="photo_stylist" id=""class="form-control">
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
        </div>
        <!-- edit catalog -->
        <div class="col-lg-8"> 
          <div class="container">
          <table class="table table-hover">
                <thead>
                    <tr>
                      <th>#catalog id</th>
                      <th>photo</th>
                      <th>comment</th>
                      <th>stylist</th>
                      <th>option</th>
                    </tr>
                </thead>

                
                <tbody>
                    <?php
                    foreach($hairCatalogList as $row2 ){
                            $catalogID = $row2['catalog_id'];
                            $uploaded_photo = $row2['catalog_photo'];
                        
                        echo" <tr>";
                            echo "<td>".$row2['catalog_id']."</td>";

                            echo "<td class='w-25'>";
                              echo "<img src='upload/admin/catalog/$uploaded_photo' alt='' class='w-25'>";
                            echo "</td>";

                            echo "<td>".$row2['catalog_comment']."</td>";
                        
                            echo "<td>".$row2['photo_stylist']."</td>";

                            echo "<td><a href='editCatalog.php?catalog_id=$catalogID' role='button'  class='btn btn-outline-dark'>edit</a></td>";
                        echo "</tr>";

                    }
                    
                    ?>
                </tbody>
            </table>        
          </div>
        </div>
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