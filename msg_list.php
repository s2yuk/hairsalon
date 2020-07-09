<?php
include 'adminMenu.php';

$msg_list = $Hairsalon->displayContact();

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        #list{
            height: 500px;
            overflow: scroll;
        }
        div p{
          font-family: 'Oleo Script', cursive;
        }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container mt-5">
          <div class="row mx-auto">
            <div class="col-lg-9">
              <p class="display-4">Message</p>
            </div>
            <div class="col-lg-3">
              <a href="new_message.php" class="btn btn-outline-dark"><i class="far fa-envelope"></i><br>New</a>
            </div>
          </div>
          
          <div class="w-75 mx-auto" id="list">
          <table class="table table-hover">
                <thead>
                  <th>contact_id</th>
                  <th>name</th>
                  <th>email</th>
                  <th>message</th>
                  <th></th>
                </thead>
                <div class="div">
                <?php foreach($msg_list as $row3) :?>
                <tbody>
                    <td><?php echo $row3['contact_id']?></td>
                    <td><?php echo $row3['contact_name']?></td>
                    <td><?php echo $row3['contact_email']?></td>
                    <td><?php echo $row3['comment'] ?></td>
                    <td><a href="msg_detail.php?contact_id=<?php echo $row3['contact_id'];?>" class="btn btn-dark">Read</a></td>
                </tbody>
                <?php endforeach;?>
                </div>
                
              </table>
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