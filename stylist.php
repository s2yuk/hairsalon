<?php
include 'userMenu.php';


$staffList=$Hairsalon->displayStaff();

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
    
    body{
        margin-top:150px;
    }
    div h5{
        font-family: 'Oleo Script', cursive;
        /* letter-spacing: 5px; */
    }
    #staff_img{
        width: 160px;
        height: 213px;
    }
    #footer{
        /* margin-top: 100px; */
    }
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    


  </head>
  <body>
      
  <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <h5 class="display-4 text-center"> Stylists</h5>
            </div>
        </div>
        <div class="row mt-2">
            <?php foreach($staffList as $staff):?>
                <div class="col-lg-2 text-center mt-2 mb-2">
                    <?php echo $staff['position'];?><br>
                    <img src="upload/admin/<?php echo $staff['staff_photo'];?>" alt="" class="" id="staff_img">
                    <h4><?php echo $staff['staff_name'];?></h4>
                    <?php 
                        // echo $staff['staff_id'];
                        $modalID = $staff['staff_id'];
                    ?>                  
                    <!-- Button trigger modal -->    
                    <button type="button" name="<?php echo $modalID;?>" class="btn btn-outline-dark mt-2" data-toggle="modal" data-target="#modalID_<?php echo $modalID;?>">More info</button>
                
                    <!-- Modal -->
                    <div class="modal fade" id="modalID_<?php echo $modalID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $staff['staff_name'] ;?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row text-left">
                                <div class="col-lg-6">
                                    <img src="upload/admin/<?php echo $staff['staff_photo'];?>" alt="" class="w-100">
                                </div>
                                <div class="col-lg-6">
                                    <div class="row ">
                                        <div class="col-lg-5 ">Position :</div>
                                        <div class="col-lg-7"><?php echo $staff['position'];?></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-5">Gender :</div>
                                        <div class="col-lg-7"><?php echo $staff['staff_gender'];?></div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-5">Bio :</div>
                                        <div class="col-lg-7"><?php echo $staff['staff_bio'];?></div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
            <?php endforeach;?>
        </div>
    </div>
    <br><br><br><br>

   <!-- footer -->
   <nav class="nav navbar bg-dark fixed-bottom" id="footer">
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