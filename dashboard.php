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
  </head>
  <body>
    <div class="mainVisual" id="mainVisual">
      <div class="welcome-msg">
        <span class="chara">w</span>
        <span class="chara">e</span>
        <span class="chara">l</span>
        <span class="chara">c</span>
        <span class="chara">o</span>
        <span class="chara">m</span>
        <span class="chara">e</span>

        <div class="angle">
          <i class="fas fa-angle-double-down"></i>
        </div>
      </div>
    </div>

    <div class="top-wrapper">    
        <div class="box" id="left-box">
          <h2 class="">News</h2>
          <hr>
          <div id="news">
            <ul>          
              <?php 
                foreach($newsList as $row) {
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
          <p>Copyright@ Yuka Matsumoto</p>
        </li>
        <li>
          <a href="contactpage.php">Contact</a>
        </li>
      </ul>
    </footer>
  </body>
</html>