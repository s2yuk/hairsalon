<?php
include 'adminMenu.php';

// $msg_list = $Hairsalon->displayContact();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>New message</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class="card w-75 mx-auto">
            <div class="card-header">
                <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-4">To :</div>
                    <div class="col-lg-8">
                        <input type="email" name="email" id="" required placeholder="email" class="mt-2">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-2">
                    <div class="col-lg-4">File :</div>
                    <div class="col-lg-8">
                        <input type="file" name="iphoto" id="">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-lg-4">Message :</div>
                    <div class="col-lg-8">
                        <textarea name="comment" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                </div>
                <input type="hidden" name="c_id" value="<?php echo $loginid;?>">
                <div class="float-right mt-2">
                    <button type="submit" name="new_msg" class="btn btn-secondary">sent   <i class="fas fa-paper-plane"></i></button>
                </div>
              </form>
              </div>
          </div>
          <!-- /card -->
      </div>

    <!-- footer -->
    <nav class="nav navbar bg-dark mt-5 fixed-bottom" id="footer">
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