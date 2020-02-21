<?php 
include 'userMenu.php';


?>
<!doctype html>
<html lang="en">
  <head>
    <title>booking4</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
    <style>
      body{
        margin-top:100px;
        height: 600px;
        background-image: url(asset/state.jpeg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size : cover;

      }
    </style>

</head>
  <body>
      

    <div class="container bg-light text-monospace text-center">
      <h4 class="display-4 p-3"> Booking</h4>
    </div>
    
    <div class="container bg-light text-monospace text-center">
       
      <div class="alert alert-dark">
          <h5 class="p-3">Step 4</h5>
          <p> select date & time</p>
      </div>
      

      <div class="container">
          <div class="row">
             <h3 class="text-monospace mx-auto"><?php echo date("F/Y")?></h3> 
          </div>
          <div class="row">
              <div class="col-lg-2 border">
                  hour
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d");?><br>
                <?php echo date("D");?>
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+1 day'));?><br>
                <?php echo date("D", strtotime('+1 day'));?>
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+2 day'));?><br>
                <?php echo date("D", strtotime('+2 day'));?>
              </div>
              <div class="col-lg-1 border"> 
                <?php echo date("d", strtotime('+3 day'));?><br>
                <?php echo date("D", strtotime('+3 day'));?>
            </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+4 day'));?><br>
                <?php echo date("D", strtotime('+4 day'));?>
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+5 day'));?><br>
                <?php echo date("D", strtotime('+5 day'));?>
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+6 day'));?><br>
                <?php echo date("D", strtotime('+6 day'));?>
              </div>
              <div class="col-lg-1 border">
                <?php echo date("d", strtotime('+7 day'));?><br>
                <?php echo date("D", strtotime('+7 day'));?>
              </div>
              <div class="col-lg-2 border">
                  hour
              </div>
          </div>
          <div class="row">
              <div class="col-lg-2 border">
                  10:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="10:00">
                      <button type="submit" name="submit_date">
                        
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?> ">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?>">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?> ">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                            <?php 
                             
                            ?>
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="10:00">

                      <button type="submit" name="submit_date">
                            <?php 
                              
                            
                            ?>
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  10:00~
              </div>

        
        
            </div>
            <div class="row">
              <div class="col-lg-2 border">
                  11:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="11:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  11:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  12:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="12:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  12:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  13:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="13:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  13:00~
              </div>
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  14:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="14:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  14:00~
              </div>
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  15:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="15:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  15:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  16:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="16:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  16:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  17:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="17:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  17:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  18:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="18:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  18:00~
              </div>

    
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  19:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="19:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  19:00~
              </div>

        
        
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-lg-2 border">
                  20:00~
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d')?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                            
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+1 day'))?> ">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+2 day'))?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+3 day'))?> ">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+4 day'))?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+5 day'))?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                         
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+6 day'))?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                          
                      </button>
                  </form>
              </div>
              <div class="col-lg-1 border">
                  <form action="hairsalonAction.php" method="post">
                      <input type="hidden" name="select_date" value="<?php echo date('Y-m-d',strtotime('+7 day'))?>">
                      <input type="hidden" name="hour" value="20:00">

                      <button type="submit" name="submit_date">
                           
                      </button>
                  </form>
              </div>

              <div class="col-lg-2 border">
                  20:00~
              </div>

        
        
            </div>
            <!-- row -->

        </div>
        <div class="row">
            <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect4" class="btn btn-dark m-3">Previous page</button>
            </form>
        </div> 


    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>