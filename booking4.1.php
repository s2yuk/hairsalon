<?php 
include 'userMenu.php';

$date = new DateTime();
$today = $date->format('Y-m-d');
// echo "today=",$today;

$tmr =date('Y-m-d',strtotime('+1 day'));
$plus2day =date('Y-m-d',strtotime('+2 day'));
$plus3day = date('Y-m-d',strtotime('+3 day'));
$plus4day = date('Y-m-d',strtotime('+4 day'));
$plus5day = date('Y-m-d',strtotime('+5 day'));
$plus6day = date('Y-m-d',strtotime('+6 day'));
$plus7day = date('Y-m-d',strtotime('+7 day'));


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
      form{
          padding: 10px;
      }
      #openCell{
          padding: 0;
          margin: 0;
      }
      #openCell :hover{
        background-color: lightgrey;
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
            <button type="submit" name="reselect4" class="btn btn-outline-dark m-2">Re select</button>
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
        <table border="1" class="table">
            <thead>
                <tr>
                    <th colspan="2">hour</th>
                    <th>
                        <?php echo date("d");?><br>
                        <?php echo date("D");?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+1 day'));?><br>
                        <?php echo date("D", strtotime('+1 day'));?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+2 day'));?><br>
                        <?php echo date("D", strtotime('+2 day'));?>
                    </th>
                    <th> 
                        <?php echo date("d", strtotime('+3 day'));?><br>
                        <?php echo date("D", strtotime('+3 day'));?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+4 day'));?><br>
                        <?php echo date("D", strtotime('+4 day'));?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+5 day'));?><br>
                        <?php echo date("D", strtotime('+5 day'));?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+6 day'));?><br>
                        <?php echo date("D", strtotime('+6 day'));?>
                    </th>
                    <th>
                        <?php echo date("d", strtotime('+7 day'));?><br>
                        <?php echo date("D", strtotime('+7 day'));?>
                    </th>
                    <th colspan="2">
                        hour
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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
                                        echo "×";
                                    }
                                ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                        <input type="hidden" name="select_date" value="<?php echo $tmr;?> ">
                        <input type="hidden" name="hour" value="<?php echo $hour;?>">
                        <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus2day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus3day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus4day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus5day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus6day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
                                }
                            ?> 
                        </form>
                    </td>
                    <td id='openCell'>
                        <form action="hairsalonAction.php" method="post">
                            <input type="hidden" name="select_date" value="<?php echo $plus7day;?> ">
                            <input type="hidden" name="hour" value="<?php echo $hour;?>">
                            <?php 
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
                                    echo "×";
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