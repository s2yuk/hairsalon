
<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>        
        body{
          margin-top:100px;
          /* height: 700px; */
          background-image: url(asset/logo1.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
  
        }
        div p{
          font-family: 'Oleo Script', cursive;
        }
      </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    
  
  </head>
  <body>

      <div class="container mt-5">
      
        <div class="card w-50 mx-auto">
          <div class="card-header row">
            <div class="left col-lg-8">
              <p class="display-4">Login</p>
            </div>
            <div class="right col-lg-4">
              <div class="row mt-2">
                <form action="hairsalonAction.php" method="post">
                  <input type="hidden" name="email" id="" value="guest@user">
                  <input type="hidden" name="password" value="guest">
                  <button type="submit" name="login" class="btn btn-outline-secondary btn-sm">ゲストとしてログイン</button>
                </form>
              </div>
              <div class="row mt-2">
                <form action="hairsalonAction.php" method="post">
                  <input type="hidden" name="email" id="" value="admin@kredo">
                  <input type="hidden" name="password" value="admin">
                  <button type="submit" name="login" class="btn btn-outline-secondary btn-sm">管理者としてログイン</button>
                </form>
              </div>
            </div>
          </div>
          <div class="card-body text-monospace">
            <form action="hairsalonAction.php" method="post">
            
              <label for="">Enter email :</label>
              <input type="email" name="email" id="" class="form-control" placeholder="メールアドレス">
            <br>
              <label for="">Enter password :</label>
              <input type="password" name="password" id="" class="form-control" placeholder="パスワード">
            <br>
              <button type="submit" name="login" class="btn btn-secondary   form-control">Login</button>
              
            </form>
          </div>
        </div>

        <div class="w-50 mx-auto mt-2 text-center text-dark">
          <label for="">Before login </label>
          <a href="register.php" role="button" class="btn btn-outline-dark">Register</a>
        </div>
      </div>



      <!-- footer -->
    <nav class="nav navbar bg-dark fixed-bottom">
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