<?php
include 'adminMenu.php';
$client_id=$_GET['id'];

$user=$Hairsalon->getUserforEdit($client_id);
$memoList = $Hairsalon->getMemo($client_id);

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
      <div class="m-5">
          <div class="back-btn">
            <a href="userList.php" class="btn btn-outline-dark">User List</a>
          </div>
          <div class="row mt-2">
            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                    <h3 class="">Profile</h3>
                </div>
                <div class="card-body">
                      <div class="text-center">
                        <h4 class="card-title text-uppercase"><?php echo $user['fname']." ".$user['lname'];?></h4>
                      </div>
                      <hr>
                      <div class="row">
                          <div class="col-lg-4">Gender :</div>
                          <div class="col-lg-8"><?php echo $user['c_gender'];?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">TEL :</div>
                          <div class="col-lg-8"><?php echo $user['telephone'];?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Email :</div>
                          <div class="col-lg-8"><?php echo $user['email'];?></div>
                      </div>
                      <div class="row">
                          <div class="col-lg-4">Bio :</div>
                          <div class="col-lg-8"> 
                            <form action="hairsalonAction.php" method="post">
                              <input type="hidden" name="c_id" value="<?php echo $user['c_id'];?>">
                              <textarea name="bio" id="" cols="30" rows="10" placeholder="<?php echo nl2br($user['bio']);?>" class="form-control" required></textarea>
                              <!-- <input type="text" name="bio" placeholder="<?php echo $user['bio'];?>" class="form-control" required> -->
                              <div class="float-right">
                                  <button type="submit" name="editUserBio" class="btn btn-dark">submit</button>
                              </div>
                            </form>
                          </div>
                      </div>
                </div>
              </div>
              <!-- /card -->
            </div>
            <!-- col -->
            <div class="col-lg-8">
                <div class="card mt-3 mt-lg-0">
                <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="c_id" value="<?php echo $client_id;?>">
                  <div class="row m-2">
                    <div class="col-2">
                        Date :
                    </div>
                    <div class="col-9">
                      <input type="date" name="date" id="" required>
                    </div>
                  </div>
                  <div class="row m-2">
                    <div class="col-2">
                        Photo :
                    </div>
                    <div class="col-9">
                        <input type="file" name="photo" id="">
                    </div>
                  </div>
                  <div class="row m-2">
                    <div class="col-2">
                        Memo :
                    </div>
                    <div class="col-9">
                        <textarea name="memo" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                  </div>
                  <div class="text-right m-2">
                    <button type="submit" name="add_memo" class="btn btn-secondary p-2 mr-5">submit</button>
                  </div>
                </form>

              </div>
              
              <?php foreach($memoList as $memo):?>
                <div class="card mt-2">
                  <div class="card-body">
                    <p class="card-text text-right"><?php echo $memo['date'];?></p>
                    <h5 class="card-title"><?php echo nl2br($memo['memo']);?></h5>

                    <?php if($memo['photo'] != ""):?>
                      <?php $photo =  $memo['photo'];?>
                      <img class="w-75" src="upload/admin/c_photo/<?php echo $photo;?>"><br>
                    <?php endif;?>

                    <div class="text-right">
                      <a href="deleteMemo.php?id=<?php echo $memo['memo_id'];?>&c_id=<?php echo $client_id;?>" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                  </div>
                </div>
              <?php endforeach;?>
    
            </div>
            <!-- col -->
          </div>
          <!-- /row -->
      </div>
      <!-- container -->

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>