<?php 
 include 'userMenu.php';
 $loginid=$_SESSION['loginid'];

 $login_email = $Hairsalon->getEmail($loginid);
//  echo "login Email:".$login_email['email'];
 $email = $login_email['email'];
 $myMsgList = $Hairsalon->myMessage($email);

 $msgID = $_GET['contact_id'];
 $row = $Hairsalon->getMsgID($msgID);
 
 $reply_list = $Hairsalon->displayReply($msgID);
//  echo $reply_list;

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
            margin-top: 100px;
        }
    </style>

</head>
  <body>
  <div class="container">
        <div class="w-75 mt-3 mb-3 mx-auto">
             <a href="mypage.php" class="btn btn-outline-dark text-right">Back to myPage</a>
            <div class="card mt-2">
              <div class="card-header">
                <div class="row">
                  <div class="col-lg-3 text-right">
                    contact_id : 
                  </div>
                  <div class="col-lg-5">
                    <b><?php echo $row['contact_id']?></b>
                  </div>
                  <div class="col-lg-4 text-right">
                    <?php echo $row['send_time']?>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 text-right">
                      Name: 
                    </div>
                    <div class="col-lg-7">
                      <b> <?php echo $row['contact_name']?> </b> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 text-right">
                      Email:
                    </div>
                    <div class="col-lg-7">
                      <b> <?php echo $row['contact_email']?> </b>
                    </div>
                </div>
              </div>
              <div class="card-body">
                  <div class="row">
                      <div class="col-lg-3 text-right">
                        Gender :
                      </div>
                      <div class="col-lg-7">
                        <?php echo $row['gender']?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-3 text-right">
                        service :
                      </div>
                      <div class="col-lg-7">
                        <?php echo $row['service']?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-3 text-right">
                        stylist :
                      </div>
                      <div class="col-lg-7">
                        <?php echo $row['stylist']?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-3 text-right">
                        Comment :
                      </div>
                      <div class="col-lg-7">
                        <?php echo $row['comment']?>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-3 text-right">
                        Image photo :
                      </div>
                      <div class="col-lg-7">
                        <?php 
                          if (empty($row['iphoto'])){
                            $iphoto = $row['iphoto'];
                            echo "No image photo";
                          }else{
                            $iphoto = $row['iphoto'];
                            echo "<img src='upload/user/msg/$iphoto' alt='image_photo' class='w-100'>";
                          }
                        ?>
                      </div>
                  </div>
                  <br>
              </div>

              
            </div>
            <?php if($reply_list >0):?>
              <?php foreach($reply_list as $reply):?>
                <div class="card mt-2">
                    <?php if($reply['user_id'] != $_SESSION['loginid']):?>
                        <div class="card-header">
                          <!-- other's reply -->
                    <?php else:?>
                        <div class="card-body">
                          <!-- my reply -->
                    <?php endif ;?>
                            <div class="row">
                                <div class="col-lg-3 text-right">
                                  <b><?php echo $reply['fname'];?> :</b>
                                </div>
                                <div class="col-lg-6">
                                    <?php echo $reply['text'];?>
                                    <br>
                                    <?php if(!empty($reply['file'])){
                                      $file = $reply['file'];
                                      echo "<img src='upload/user/msg/$file' alt='image_file' class='w-100'>";
                                    }
                                    ?>
                                    <br>
                                </div>
                                <div class="col-lg-3">
                            <?php echo $reply['send_time'];?>
                        </div>
                            </div>
                        </div>
                        

                </div>
              <?php endforeach;?>
            <?php endif ;?>
            <div class="card mt-2">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3"></div>
                  <div class="col-lg-7">
                    <form action="" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="c_id" value="<?php echo $row['contact_id'];?>">
                      <textarea name="text" id="" cols="70" rows="5" required></textarea>
                      <input type="file" name="file" id="">
                      <br>
                      <button type="submit" name="reply" class="btn btn-dark btn-block mt-3"> Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
           
            
            


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