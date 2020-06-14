<?php

include 'userMenu.php';
$newsList=$Hairsalon->displayNews($news,$date);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>hairsalon dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <style>
      body{
        background-color: #F8F9FA;
      }
      header{
        margin-top:75px;
        height: 600px;
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
      #welcome{
        font-family: 'Oleo Script', cursive;
        margin-top:460px;
        -webkit-text-stroke: 1px black;
      }
    
      #div2{
        height:380px;
      }
   
      #news{
        overflow: scroll;
      } 
      h2{
        font-family: 'Oleo Script', cursive;

      }
      

    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    
  </head>
  <body>

    <header class="text-center">
      <br>
      <p class="display-3 text-light" id="welcome">Welcome</p>
    
    </header>


    <div class="jumbotron bg-light" id="div2">

      <div class="row">      
        <div class="col-lg-8 bg-light border" >
          <h2 class="mt-2">News:</h2>
          <hr>
          <div id="news" style="height:250px;">
            <?php foreach($newsList as $row) {
              // $info_id = $row['info_id'];
                echo "<h4>◆ ".$row['news']."</h4>";
                echo "<br>";
                echo "<p class='text-right'>---".$row['date']." update</p>";
                echo "<br>";
            }
            ?>
          </div>
        </div>
        <div class="col-lg-4 border text-monospace">
          <table>
              <tr>
              <h2 class="mt-2">Our Business hours:</h2>
              <br>
              </tr>
              <tr>
                  <td>Mon, Wed, Thu:</td>
                  <td>11:00~20:00</td>
              </tr>
              <tr>
                  <td>Fri, Sat:</td>
                  <td>10:30~21:00</td>
              </tr>
              <tr>
                  <td>Sun:</td>
                  <td>10:30~19:00</td>
              </tr>
              <tr>
                  <td>Tue:</td>
                  <td>Close</td>
              </tr>
          </table>
            <br>
            <br>
          <h4>TEL: 03-1234-5678</h4>
        </div>
      </div>
    </div>  

   
    <!-- footer -->
    <nav class="nav navbar bg-dark">
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