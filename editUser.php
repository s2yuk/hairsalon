<?php
include 'adminMenu.php';
$client_id=$_GET['id'];
$user=$Hairsalon->getUserforEdit($client_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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
      <div class="container mt-5">
          <div class="w-75 mx-auto">
            <a href="userList.php" class="btn btn-outline-dark">User List</a>
          </div>
          <div class="card w-75 mx-auto mt-2">
            <div class="card-header">
                <h3 class="">Add bio</h3>
            </div>
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
              <h4 class="card-title"><?php echo $user['fname']." ".$user['lname'];?></h4>
                  <div class="row">
                      <div class="col-lg-2 text-right">Gender :</div>
                      <div class="col-lg-9"><?php echo $user['c_gender'];?></div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2 text-right">TEL :</div>
                      <div class="col-lg-9"><?php echo $user['telephone'];?></div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2 text-right">Email :</div>
                      <div class="col-lg-9"><?php echo $user['email'];?></div>
                  </div>
                  <div class="row">
                      <div class="col-lg-2 text-right">Bio :</div>
                      <div class="col-lg-9"> 
                        <form action="hairsalonAction.php" method="post">
                            <div class="input-group">
                                <input type="hidden" name="c_id" value="<?php echo $user['c_id'];?>">
                                <input type="text" name="bio" placeholder="<?php echo $user['bio'];?>" required class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" name="editUserBio" class="btn btn-dark">submit</button>
                                </div>
                            </div>
                        </form>
                      </div>
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