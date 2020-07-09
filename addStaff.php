<?php
include 'adminMenu.php';
$staffList=$Hairsalon->displayStaff();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>add staff</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      tbody img{
        width: 160px;
        height: 213px;
      }
      h3{
        font-family: 'Oleo Script', cursive;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="card w-50 mt-5 mx-auto">
            <div class="card-header">
                <h3>add staff </h3>
            </div>
            <div class="card-body">
                <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="staff_name" id="" placeholder="enter fullname" class="form-control" required>
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
                    <label for=""> chose gender:</label>
                    <input type="radio" name="staff_gender" id="" value="Male">Male  
                    <input type="radio" name="staff_gender" id="" value="Female">Female  
                    <br>
                    <br>
                    <label for="">select stylist photo:</label>
                    <input type="file" name="s_photo" id="">
                    <br>
                    <br>
                    <input type="text" name="bio" placeholder="enter bio" class="form-control" required>


                    <button type="submit" name="input" class="btn btn-dark btn-block mt-3">input Staff data</button>
                </form>

            </div>
        </div>
        
    </div>


    <div class="w-75 mx-auto">
   
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#staff id</th>
              <th>Fullname</th>
              <th>position</th>
              
              <th>gender</th>
              <th>photo</th>
              <th>bio</th>
              <th>option</th>
            </tr>
          </thead>

        
          <tbody>
            <?php
              foreach($staffList as $row ){
                $staffID = $row['staff_id'];
                echo" <tr>";
                    echo "<th>".$row['staff_id']."</th>";
                    echo "<th>".$row['staff_name']."</th>";
                    echo "<th>".$row['position']."</th>";
                   
                    echo "<th>".$row['staff_gender']."</th>";

                    echo "<th>";
                    if(!empty($row['staff_photo'])){
                        $sphoto = $row['staff_photo'];
                        echo "<img src='upload/admin/$sphoto' alt='reviewPhoto' class='img-thumbnail w-50'>";
                    }else{
                        echo "<img src='asset/smile.jpg' alt='image now printing' class='img-thumbnail w-50'>";
                    }
                    echo "</th>";

                    echo "<th>".$row['staff_bio']."</th>";
                    echo "<th><a href='editStaff.php?staff_id=$staffID' role='button' class='btn btn-outline-dark'>edit</a></th>";
                echo "</tr>";

              }
            
            ?>
          </tbody>
        </table>

     
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