<?php
include 'adminMenu.php';
$userList = $Hairsalon->displayUserList();
$results = $Hairsalon->searchUser($keyword);

?>
<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      #userlist{
        border: 2px solid black;
      }
      #footer{
        margin-top: 280px;
      }
      h5{
        font-family: 'Oleo Script', cursive;
      }
     
    </style>
  
  </head>
  <body>    
    <div class="container mb-5  ">
      <div class="row mt-5">
        <div class="col-lg-7">
          <h5 class="display-4">User List</h5>
          <p>There are <?php echo count($userList)?> members now.</p>
        </div>
        <div class="col-lg-5">
          <form action="" method="post" class="form-inline">
            <input type="text" name="keyword" id="" placeholder="Enter first name" class="form-control">
            <button type="submit" name="search" class="btn btn-outline-dark ml-1">Search</button>
          </form>
        </div>
      </div>
      
      <div class="row mt-3" id='userlist'>
        <table class="table table-hover">
          <thead>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>TEL</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Option</th>
          </thead>
          <?php
            
            if($results > 0){
              foreach($results as $result){
                $client_id=$result['c_id'];
                echo"<tbody>";
                    echo "<td>".$result['c_id']."</td>";
                    echo "<td>".$result['fname']."</td>";
                    echo "<td>".$result['lname']."</td>";
                    echo "<td>".$result['c_gender']."</td>";
                    echo "<td>".$result['telephone']."</td>";
                    echo "<td>".$result['email']."</td>";
                    echo "<td>".$result['bio']."</td>";
                    echo "<td><a href='editUser.php?id=$client_id' class='btn btn-outline-dark btn-sm'>edit user</a></td>";
                    echo "</tbody>";
              }
            }else{
              foreach($userList as $row){
                $client_id=$row['c_id'];
                  echo"<tbody>";
                    echo "<td>".$row['c_id']."</td>";
                    echo "<td>".$row['fname']."</td>";
                    echo "<td>".$row['lname']."</td>";
                    echo "<td>".$row['c_gender']."</td>";
                    echo "<td>".$row['telephone']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['bio']."</td>";
                    echo "<td><a href='editUser.php?id=$client_id' class='btn btn-outline-dark btn-sm'>edit user</a></td>";
                    echo "</tbody>";
                  }
            }
          ?>
        </table>
        <br>
      </div>
      
    </div>
    <!-- footer -->
    <nav class="nav navbar bg-dark" id="footer">
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