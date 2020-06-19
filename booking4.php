<?php 
include 'userMenu.php';

$date = new DateTime();
$today = $date->format('Y-m-d');
$tmr =date('Y-m-d',strtotime('+1 day'));
$plus2day =date('Y-m-d',strtotime('+2 day'));
$plus3day = date('Y-m-d',strtotime('+3 day'));
$plus4day = date('Y-m-d',strtotime('+4 day'));
$plus5day = date('Y-m-d',strtotime('+5 day'));
$plus6day = date('Y-m-d',strtotime('+6 day'));
$plus7day = date('Y-m-d',strtotime('+7 day'));

$Date= date("D");
$Date1 = date("D", strtotime('+1 day'));
$Date2 = date("D", strtotime('+2 day'));
$Date3 = date("D", strtotime('+3 day'));
$Date4 = date("D", strtotime('+4 day'));
$Date5 = date("D", strtotime('+5 day'));
$Date6 = date("D", strtotime('+6 day'));
$Date7 = date("D", strtotime('+7 day'));


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
      div h5{
        font-family: 'Oleo Script', cursive;
      }
      #x{
        padding:7px;
        background-color: #d7d8d9;
      }
      #openCell{
        padding: 0;
        margin: 0;
      }
      #openCell :hover{
        background-color: #efdad2;
      }
      .table th {
        padding: 0;
        vertical-align: inherit;
      }
  
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
    

</head>
  <body>
      

    <div class="container bg-light text-monospace text-center">
      <h5 class="display-4 p-3"> Booking</h5>
    </div>
    
    <div class="container bg-light text-monospace text-center">
        <div class="row">
            <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect4" class="btn btn-secondary m-2"> << Reselect</button>
            </form>
        </div> 
      <div class="alert alert-dark">
          <h5 class="p-3">Step 4</h5>
          <p> select date & time</p>
      </div>
      
      <div class="container">
        <div class="">
             <h3 class="text-monospace mx-auto"><?php echo date("F/Y")?></h3> 
        </div>
        <table class="table table-bordered" id="table">
            <thead>
                <tr>
                    <th colspan="2">hour</th>
                    <th>
                        <?php echo date("d");?><br>
                        <?php echo $Date; ?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+1 day'));?><br>
                        <?php echo $Date1;?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+2 day'));?><br>
                        <?php echo $Date2;?>
                    </th>
                    <th> 
                        <?php echo date("d", strtotime('+3 day'));?><br>
                        <?php echo $Date3;?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+4 day'));?><br>
                        <?php echo $Date4;?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+5 day'));?><br>
                        <?php echo $Date5;?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+6 day'));?><br>
                        <?php echo $Date6;?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+7 day'));?><br>
                        <?php echo $Date7;?>
                    </th>
                    <th colspan="2">
                        hour
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr id='tableRow'>
                    <th colspan="2" id="">
                        <?php 
                            $hour="10:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date2=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{
                                $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                            
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date3=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date4=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date5=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{
                                $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date6=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                            if($Date7=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="11:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="12:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="13:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="14:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="15:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="16:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="17:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="18:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="19:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue" or $Date=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{

                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue" or $Date1=="Sun"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue" or $Date2=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue"or $Date3=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue" or $Date4=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue" or $Date5=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue" or $Date6=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue" or $Date7=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>
                <tr>
                    <th colspan="2" id="">
                        <?php 
                            $hour="20:00";
                            echo $hour;
                        ?>
                    </th>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $today; ?>">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                                <?php 
                                if($Date=="Tue" or $Date =="Mon" or $Date =="Wed" or $Date =="Thu" or $Date=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($today,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo "</button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";

                                    }
                                }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
                            if($Date1=="Tue" or $Date1 =="Mon" or $Date1 =="Wed" or $Date1 =="Thu" or $Date1=="Sun"){
                                echo "<div id='x'>×</div>";
                            }else{

                                $result = $Hairsalon->getTimeHourReserve($tmr,$hour);
                                // print_r($result);
                                $count = count($result);
                                // echo "count",$count;
                                // echo "<br>";
                                if($count =='0'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◎";
                                    echo " </button>";
                                }elseif($count=='1'){
                                    echo "<button type='submit' name='submit_date' class='btn'>";
                                    echo "◯";
                                    echo " </button>";
                                }else{
                                    echo "<div id='x'>×</div>";
                                }
                            }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date2=="Tue" or $Date2 =="Mon" or $Date2 =="Wed" or $Date2 =="Thu" or $Date2=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus2day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date3=="Tue" or $Date3 =="Mon" or $Date3 =="Wed" or $Date3 =="Thu" or $Date3=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus3day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date4=="Tue" or $Date4 =="Mon" or $Date4 =="Wed" or $Date4 =="Thu" or $Date4=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus4day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date5=="Tue" or $Date5 =="Mon" or $Date5 =="Wed" or $Date5 =="Thu" or $Date5=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus5day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date6=="Tue" or $Date6 =="Mon" or $Date6 =="Wed" or $Date6 =="Thu" or $Date6=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus6day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
                                if($Date7=="Tue" or $Date7 =="Mon" or $Date7 =="Wed" or $Date7 =="Thu" or $Date7=="Sun"){
                                    echo "<div id='x'>×</div>";
                                }else{
                                    $result = $Hairsalon->getTimeHourReserve($plus7day,$hour);
                                    // print_r($result);
                                    $count = count($result);
                                    // echo "count",$count;
                                    // echo "<br>";
                                    if($count =='0'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◎";
                                        echo " </button>";
                                    }elseif($count=='1'){
                                        echo "<button type='submit' name='submit_date' class='btn'>";
                                        echo "◯";
                                        echo " </button>";
                                    }else{
                                        echo "<div id='x'>×</div>";
                                    }
                                }
                            ?> 
                        </form>
                    </td>
                    <th colspan="2"><?php echo $hour;?></th>
                </tr>

                
            </tbody>
        </table>
        <div class="text-center">
            <form action="hairsalonAction.php" method="post">
            <button type="submit" name="reselect4" class="btn btn-secondary m-3"> << Previous page</button>
            </form>
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