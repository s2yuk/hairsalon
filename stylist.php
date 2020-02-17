<?php
include 'userMenu.php';


$skillList = $Hairsalon->displaySkill(); 
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
    
    body{
        margin-top:100px;
        
        
    }
    </style>


</head>
<body>
  

    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-12">
                <h3 class="text-monospace text-center"> Stylists</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-2">   
                <h4 class="text-monospace">Producer</h4>
            </div>
            <div class="col-lg-2">
                <h5 class="text-monospace">Manager</h5>
            </div>
            <div class="col-lg-6">
                <h5 class="text-monospace">Stylist</h5>
            </div>
            <div class="col-lg-2">
                <p class="text-monospace">Assistant</p>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-2">
                <figure>
                
                    <img src="asset/staff1.jpg" alt="producer">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">Yuya <br> Yamaguchi</p>     
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff1"  class="btn btn-outline-dark btn-sm">More info</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-2">
                    <figure>
                        <img src="asset/staff2.jpg" alt="Manager">
                        <figcaption class="text-center">
                            <p class="text-monospace p-3">Yasuaki <br> Ogawa</p>
                        </figcaption>
                    </figure>
                    <div class="text-center">
                        <form action="" method="post">
                            <button type="submit" name="staff2"  class="btn btn-outline-dark btn-sm">More info</button>
                        </form>
                    </div>
            </div>
            <div class="col-lg-2">
                    <figure>
                        <img src="asset/staff3.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3"><br>KOUSUKE</p>
                    </figcaption>
                    <div class="text-center">
                        <form action="" method="post">
                            <button type="submit" name="staff3"  class="btn btn-outline-dark btn-sm">More info</button>
                        </form>
                    </div>
            </div>
            <div class="col-lg-2">
                <figure>
                    <img src="asset/staff4.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">Ery<br>Hiramoto</p>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff4"  class="btn btn-outline-dark btn-sm">More info</button>
                    </form>
                </div>

            </div>
            <div class="col-lg-2">
                <figure>
                    <img src="asset/staff5.jpg" alt="stylist">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3">You<br>Ichijo</p>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff5"  class="btn btn-outline-dark btn-sm">More info</button>
                    </form>
                </div>
            
            </div>
            <div class="col-lg-2">
                <figure>
                    <img src="asset/staff6.jpg" alt="assistant">
                    <figcaption class="text-center">
                        <p class="text-monospace p-3"><br> mitsuki</p>
                    </figcaption>
                </figure>
                <div class="text-center">
                    <form action="" method="post">
                        <button type="submit" name="staff6"  class="btn btn-outline-dark btn-sm">More info</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <br>
        
           <?php 

                
                if(isset($_POST['staff1'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "[All coupons cannot be used] <br>
                    New reservations are only for regular menus ◎
                    I'm Yamaguchi, producer of STATES omotesando. We create hairstyles tailored to each individual with experience and skills polished through numerous magazines, media and seminars. It is a display in the store where you can enjoy the sunshine, everyone can feel comfortable and enjoy. Please visit us once! !<br><br>";
                    echo "Year : 16th <br>";
                    echo "Strongs style: Natural<br>";
                    echo "Strong skill: [Cut] <br>";
                    echo "It has a reputation for not only the feeling of omission, a feeling of air, a feeling of bunch, but also the ease of daily use and the keeping new style!! Grant yourself what you want to be.<br>";
                    echo " Favorite: Muscle training, walking, making dried flowers, collecting miscellaneous goods";

                    echo "</p>";
                    echo "</div>";

                }

                if(isset($_POST['staff2'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "[Not available except for personal coupons]<br> Digital perm popular ♪
                    I will do my best to be wonderful. If you've cut your hair somehow, you don't get the way you want, you're looking for your favorite beauty salon, you want to be more cute and nice, please come here first. I am confident that I will be happy. The first person is also welcomed ♪ Please leave a digital perm!<br>";
                    echo "Year : 12nd <br>";
                    echo "Strongs style: Natural<br>";
                    echo "Strong skill: [Digital Perm]  <br>";
                    echo " Digital Perm grants 'No more winding with iron' If you have ever failed perm from one curl to foreign hair, or if you don't get the perm you want, please contact us!<br>";
                    echo " Favorite: [Muscle training] Holidays are days of going to the gym lol<br>
                    [Camera] I shoot my own hair.";

                    echo "</p>";
                    echo "</div>";

                }

                if(isset($_POST['staff3'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "[Men's ◎ Bob ◎ Mash ◎] Nomination fee of 0 yen for very popular ☆<br>
                     We will solve your worries with careful counseling and reliable technology utilizing the experience of manager and director. If you want to be fashionable, or if you are looking for a hairdresser who can stay with you for a long time, please appoint it! Only nomination for hair set is OK!<br>";
                    echo "Year : 8th <br>";
                    echo "Strongs style: Casual, street<br>";
                    echo "Strong skill: [Cut]  <br>";
                    echo " I'm good at minimum bob, handsome short! Men's style emphasizes a feeling of bunch and silhouette. If you can leave it to us, it will definitely be cool! Please leave ash system, grace system color ★<br>";
                    echo " Favorite:  My hobby is wide and shallow. Please tell me what you are addicted to and recommended.";
                    echo "Note: Job requests for TV, magazines, advertisements, workshops, etc. are accepted by telephone outside business hours.";

                    echo "</p>";
                    echo "</div>";
                }
                if(isset($_POST['staff4'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "Reputation of color ◎ Auju sommelier suggests beauty hair! !
                    If you are not satisfied with the person in charge, please leave it to me! ! I am confident in color treatment. Together with our customers, we create only the best hairstyles that only suit our customers. You are welcome! For a woman who wants to be beautiful no matter how many months pass, she is supported by her proposal, reproducibility and praised hairstyle! !<br>";
                    echo "Year : 6th <br>";
                    echo "Strongs style: Natural<br>";
                    echo "Strong skill: It's an Aujua Treatment Sommelier.<br>-Transparent color, boasts Bob from short! Word-of-mouth reputation! Let's enjoy casual personality! I am also good at party arrangements! Please leave us stylish hair that is different from people.<br>";
                    echo "Favorite:  I'm addicted to body makeup ◎ Ingest good things such as charcoal. Improving eating habits to pursue cleanness from inside! I like watching movies and outdoors. Please see it on Instagram as well → @elir_hiramoto<br>";
                   
                    echo "</p>";
                    echo "</div>";
                }
                if(isset($_POST['staff5'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "[Similar cut] ◎ Bob ◎ Color ◎ Word of mouth high evaluation<br>
                    We will make the very cute style that suits each customer together ★ Minimize Korean style and damage, ground hair style with special combination that thought to be able to make beautiful colors as many times as possible I am good at colors and design colors ★ I am also good at men's cuts, so please look forward to ☆ Student discount U24 ◎ Instagram states_ichijo<br>";
                    echo "Year : 6th <br>";
                    echo "Strongs style: loved<br>";
                    echo "Strong skill: I am in charge of a wide range of colors like k-pop idols and scalp colors! We will adjust the transparency and texture with an exquisite balance to make the most cute style together! I have received hot support for my treatment ☆<br>";
                    echo "Favorite: Korea, martial arts..watching, everything about beauty!<br>";
                   
                }
                if(isset($_POST['staff6'])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "I'm grad to make you more cute!!<br>";
                    echo "</p>";
                    echo "</div>";
                                     
                }
                if(isset($_POST[$row['staff_id']])){
                    echo "<div class='row bg-light p-3'>";
                    echo "<p class='lead'>";
                
                    echo "I'm grad to make you more cute!!<br>";
                    echo "</p>";
                    echo "</div>";
                                     
                }

            ?>
        
        </div>
    </div>

   




    <!-- footer -->
    <nav class="nav navbar bg-dark mt-5">
      <a class="" href="dashboard.php" >Go to top</a>
      <p class="text-light">copyright@ Yuka</p>
      <a href="contactpage.php">contact</a>
    </nav>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>