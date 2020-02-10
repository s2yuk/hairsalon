<?php
 include 'adminMenu.php';

 $staffList =$Hairsalon->displayStaff();
//  $staffSkills =$Hairsalon->getStaffSkills($id);
 


?>

<!doctype html>
<html lang="en">
  <head>
    <title>staff page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      body{
      margin-top:px;

    }
    </style>
  
  
  
  </head>
  <body>
      
    <div class="container">
      <h3>Staff skills</h3>


      <?php
        foreach ($staffList as $row)
        $staffID = $row['staff_id']?>
      <div class="card w-50" >
        <div class="card-header">
            <?php echo "#".$row['staff_id']?>
            <br>
            <?php echo $row['staff_name'] ?>
        </div>

        <div class="card-body">
        
         <?php 
          foreach($staffSkills as $skills){

            $id= $row['user_id'];
        
            if( $skills['user_id'] == $row['staff_id']){

              echo $skills['skill_name'];

            

            }

          }
           
         ?>
      <?php //endforeach; ?>
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