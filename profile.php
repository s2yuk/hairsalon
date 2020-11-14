<?php
  include 'navbar.php';
  // echo $_SESSION['loginid'];
  $loginid = $_SESSION['loginid'];
  $user = $Hairsalon->getUserforEdit($loginid);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
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
      background-image: url(asset/logo1.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center center;
      background-size :cover ;
    }
    #title{
      background-color: rgba(255, 255, 255, 0.8);
    }
    #title,#subtitle{
      font-family: 'Oleo Script', cursive;
    }
    .subtitle{
      display: flex;
      height: 40px;
    }
    #subtitle{
      font-size: 35px;
      color:white;
      -webkit-text-stroke: 1px black;
    }
    .col-lg-4{
      text-align: center;
    }
    .text-sm{
      font-size: 0.8em;
    }
    /* --------------------------------- */
    footer{
      position: fixed;
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
      .subitle{
        height: 30px;
      }
      footer{
        position: relative;
      }
    }
</style>
</head>
<body>
  <div class="container">
    <div class="card mx-auto">
      <div class="card-header">
          <h3 class="title" id="title">Profile</h3>
      </div>
      <div class="card-body">
        <form action="hairsalonAction.php" method="post">
          <div class="row">
            <div class="col-lg-4">name :</div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" name="fname" placeholder="<?php echo $user['fname'];?>" value="<?php echo $user['fname'];?>" class="form-control">
                </div>
                <div class="col-lg-6">
                  <input type="text" name="lname" placeholder="<?php echo $user['lname'];?>" value="<?php echo $user['lname'];?>" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">Gender :</div>
            <div class="col-lg-8">
              <select name="gender" class="form-control">
                <option value="<?php echo $user['c_gender']?>"><?php echo $user['c_gender'];?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">TEL :</div>
            <div class="col-lg-8">
              <input type="number" name="telephone" id="" placeholder="<?php echo $user['telephone'];?>" value="<?php echo $user['telephone'];?>" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">Email :</div>
            <div class="col-lg-8">
              <input type="email" name="email" class="form-control" placeholder="<?php echo $user['email'];?>" value="<?php echo $user['email'];?>">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">password :</div>
            <div class="col-lg-8">
              <input type="password" name="password" id="" value="<?php echo $user['password'];?>" class="form-control" placeholder="">
            </div>
          </div>   
          <div class="w-50 mx-auto mt-5 text-center">
              <?php
                if($loginid == 2 OR $loginid == 8){
                  echo "<button type='submit' name='editProfile' class='btn btn-secondary form-control' disabled>Edit 変更する</button>";
                  echo "<span class='text-secondary text-sm'>簡単ログインのアカウントは無効化していため削除できません。</span>";
                }else{
                  echo "<button type='submit' name='editProfile' class='btn btn-secondary form-control'>Edit 変更する</button>";
                }
              ?>
          </div>
        </form>
      </div>
    </div>
    <!-- /card -->
    <div class="mt-2 text-center">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCentered">
        Delete Profile 退会する
      </button>

      <!-- Modal -->
      <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenteredLabel">confirmation 確認</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              本当に退会しますか。<br>
              <?php
                if($loginid == 2 OR $loginid == 8){
                  echo "<span class='text-secondary text-sm'>簡単ログインのアカウントは無効化していため削除できません。</span>";
                }
              ?>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Back　戻る</button>


              <?php
                if($loginid == 2 OR $loginid == 8){
                  echo "<a href='' class='btn btn-danger'>Delete　退会する</a>";
                }else{
                  echo "<a href='deleteProfile.php' class='btn btn-danger'>Delete　退会する</a>";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <ul>
      <li><a href="dashboard.php">Home</a></li>
      <li><p>Copyright@ Yuka Matsumoto</p></li>
      <li><a href="contactpage.php">Contact</a></li>
    </ul>
  </footer>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>