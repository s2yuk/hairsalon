<?php
// include 'userMenu.php';
  include 'navbar.php';
$newsList=$Hairsalon->displayNews($news,$date);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>hairsalon dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- css -->
    <link rel="stylesheet" href="asset/css/dashboard.css">
    <!-- jQuery本体 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <!-- Font awesome icon -->
    <script src="https://kit.fontawesome.com/eb83b1af77.js" crossorigin="anonymous"></script>

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="mainVisual" id="mainVisual">
      <br>
      <p class="" id="welcome">Welcome</p>
      <i class="fas fa-angle-double-down fa-3x"></i>
    </div>

    <div class="top-wrapper">    
        <div class="box" id="left-box">
          <h2 class="">News</h2>
          <hr>
          <div id="news">
            <ul>          
              <?php foreach($newsList as $row) {
                // $info_id = $row['info_id'];
                echo "<li>".nl2br($row['news'])."</li>";
                echo "<br>";
                echo "<p class='text-right'>---".$row['date']." update</p>";
                echo "<br>";
              }
              ?>
              </ul>
          </div>
        </div>
        <div class="box" id="right-box">
          <table>
              <tr id="table-border">
                <h2 class="">Business hours</h2>
              </tr>
              <hr>
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
          <hr>
          <div class="tel" >
            <h2>Tel: 03-1234-5678</h2>
          </div>
        </div>
    </div>  
    <!-- footer -->
    <footer class="">
      <ul>
        <li>
          <a href="dashboard.php">Home</a>
        </li>
        <li>
          <p class="center">Copyright@ Yuka Matsumoto</p>
        </li>
        <li>
          <a href="contactpage.php">Contact</a>
        </li>
      </ul>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- js -->
    <script type="text/javascript" src="asset/js/script.js"></script>
 
  </body>
</html>