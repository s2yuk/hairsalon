<?php
include 'adminMenu.php';

$skillList = $Hairsalon->displaySkill();

$staffID = $_GET['staff_id'];
$row1= $Hairsalon->getForEditStaff($staffID);
 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>edit staff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


  <div class="container">
        <div class="card w-75 mt-5 mx-auto">
            <div class="card-header bg-warning">
                Edit staff 
            </div>
            <div class="card-body">
                <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="staff_name" id="" placeholder="<?php echo $row1['staff_name']?>" class="form-control" required>
                    <br>
                    <label for="">position</label>
                    <select name="position" id="" required>
                        <option value="producer" class="form-control">producer</option>
                        <option value="manager" class="form-control">manager</option>
                        <option value="stylist" class="form-control">stylist</option>
                        <option value="assistant" class="form-control">assistant</option>
                    </select>
                    <br>
                    <br>
                    <label for="">skill:</label>
                    <br>
                    <?php
                     foreach($skillList as $row){
                        $skillName = $row['skillname'];
                        
                      
                      echo "<input type='checkbox' name='skill[]' id='' value='".$row['skillname']."'>".$skillName;

                     }

                     ?>
                    

                    <br>
                    <br>
                    <label for=""> chose gender:</label>
                    <input type="radio" name="staff_gender" id="" value="M">Male  
                    <input type="radio" name="staff_gender" id="" value="F">Female  
                        <br>
                        <br>
                    <div class="row bg-light">
                        <div class="col-lg-6">
                            old photo: 
                            <?php
                                if(!empty($row1['staff_photo'])){
                                        $oldphoto = $row1['staff_photo'];
                                        echo "<img src='upload/admin/$oldphoto' alt='reviewPhoto' class='img-thumbnail w-50'>";
                                }
                            ?>
                        </div>
                        <div class="col-lg-6">
                            <label for="">select stylist photo:</label><br>
                            <input type="file" name="s_photo" id="" required>
                        </div>
                    </div>
                        <br>
                        <br>
                    <input type="text" name="bio" placeholder="<?php echo $row1['staff_bio']?>" class="form-control" required>
                    <button type="submit" name="editStaff" class="btn btn-warning btn-block mt-3">Edit Staff data</button>
                </form>

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