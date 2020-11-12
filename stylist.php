<?php
// include 'userMenu.php';
include 'navbar.php';
$staffList=$Hairsalon->displayStaff();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>stylist</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* navbar with bootstrap */
        .menu-container, .header-center ul{
            position: fixed;
            top: 0;
        }
      
        /* ---------------------------------- */
        body{
            margin-top:150px;
        }
        #stylist-box{
            margin-top: 30px;
        }
        .title, .modal-title, .name{
            font-family: 'Oleo Script', cursive;
        }
        #staff_img{
            width: 160px;
            height: 213px;
        }
        footer{
            position: relative;
            bottom: 0;
            width: 100%;
        }
        @media(max-width:1000px){
            .header-center ul{
                position: fixed;
                top: 80px;
                left:50px;
                margin-left:0px;
            }
            /* ------------------- */
            #stylist-box{
                margin-bottom: 70px;
            }
            footer{
                position: relative;
                bottom: 0px;
            }
        }
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="container">
        <div class="title">
                <h5 class="display-4 text-center"> Stylists</h5>
        </div>
        <div class="row">
            <?php foreach($staffList as $staff):?>
                <div class="col-lg-2 col-md-4 col-sm-6 text-center" id="stylist-box">
                    <h5><?php echo $staff['position'];?></h5>
                    <img src="upload/admin/<?php echo $staff['staff_photo'];?>" alt="" class="staff_img" id="staff_img">
                    <h4 class="name"><?php echo $staff['staff_name'];?></h4>
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
                                <h3 class="modal-title" id="exampleModalLabel"><?php echo $staff['staff_name'] ;?></h3>
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
                                            <div class="col-5">Position :</div>
                                            <div class="col-7"><?php echo $staff['position'];?></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-5">Gender :</div>
                                            <div class="col-7"><?php echo $staff['staff_gender'];?></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-5">Bio :</div>
                                            <div class="col-7"><?php echo $staff['staff_bio'];?></div>
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
    <br><br>

   <!-- footer -->
   <footer class="">
      <ul>
        <li>
          <a href="dashboard.php">Home</a>
        </li>
        <li>
          <p>Copyright@ Yuka Matsumoto</p>
        </li>
        <li>
          <a href="contactpage.php">Contact</a>
        </li>
      </ul>
    </footer>
    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>