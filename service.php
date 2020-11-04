<?php
// include 'userMenu.php';
include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>service</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            margin-top: 150px;
        }
        h5{
            font-family: 'Oleo Script', cursive;
        }
        #hr{
            display: none;
        }
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
            /* ------------------- */
            #hr{
                display: block;
            }
            footer{
                position: relative;
                bottom: 0px;
            }
        }
    </style>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
</head>
  <body>

    <div class="container mt-3 w-75 mx-auto">
        <h5 class="display-4 text-center mt-3"> Service</h5>
        <p class="text-center">menu</p>
        
        <div class="bg-light p-3">

            <div class="row">
                <div class="col-lg-6 mx-auto mt-3">
                    <h3 class="text-monospace text-center">CUT</h3>    
                    
                    <div class="row">
                            <div class="col-6">
                                <p>stylist</p>
                            </div>
                            <div class="col-6">
                                ¥6,600~
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-6">
                                <p>Manager</p>
                            </div>
                            <div class="col-6">
                                ¥7,150~
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-6">
                                <p>Producer</p>
                            </div>
                            <div class="col-6">
                                ¥7,700~
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-6">
                                <p>Bangs</p>
                            </div>
                            <div class="col-6">
                                ¥1,650~
                            </div>
                    </div>
                 <hr>
                 <h3 class="text-monospace text-center">COLOR</h3>
                    <div class="row">
                        <div class="col-6">
                            <p>one color</p>
                        </div>
                        <div class="col-6">
                            ¥8,800~
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <p>One Bleach + onecolor</p>
                        </div>
                        <div class="col-6">
                            ¥14,300~
                        </div>
                    </div>
                 <hr>

                 <h3 class="text-monospace text-center">TREATMENT</h3>    
                    <div class="row">
                            <div class="col-6">
                                <p>2 steps </p>
                            </div>
                            <div class="col-6">
                                ¥2,200~
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-6">
                                <p>4 steps</p>
                            </div>
                            <div class="col-6">
                                ¥4,400~
                            </div>
                    </div>

                    <div class="row">
                            <div class="col-6">
                                <p>Aujua</p>
                            </div>
                            <div class="col-6">
                                ¥6,600~
                            </div>
                    </div>
                    <div id="hr">
                        <hr>
                    </div>
                </div>
                <div class="col-lg-6 mt-3">
                    <h3 class="text-monospace text-center">PERM</h3>    
                        <div class="row">
                                <div class="col-6">
                                    <p>Perm</p>
                                </div>
                                <div class="col-6">
                                    ¥8,800~
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-6">
                                    <p>Digital perm</p>
                                </div>
                                <div class="col-6">
                                    ¥12,100~
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-6">
                                    <p>Bangs perm</p>
                                </div>
                                <div class="col-6">
                                    ¥3,300~
                                </div>
                        </div>

                        <hr>
                    <h3 class="text-monospace text-center">STRAIGHT-PERM</h3>    
                        <div class="row">
                                <div class="col-6">
                                    <p>Full straight</p>
                                </div>
                                <div class="col-6">
                                    ¥15,400~
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-6">
                                    <p>Part straight</p>
                                </div>
                                <div class="col-6">
                                    ¥6,600~
                                </div>
                        </div>
                        <hr>
                    <h3 class="text-monospace text-center">Others</h3>    
                        <div class="row">
                                <div class="col-6">
                                    <p>Head spa</p>
                                </div>
                                <div class="col-6">
                                    ¥3,300~
                                </div>
                        </div>   
                        <div class="row">
                                <div class="col-6">
                                    <p>Hair set</p>
                                </div>
                                <div class="col-6">
                                    ¥6,600~
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-6">
                                    <p>Shampoo & Blow </p>
                                </div>
                                <div class="col-6">
                                    ¥3,300~
                                </div>
                        </div> 
            

                </div>

            </div>
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

      
    <!-- Optional JavaScript -->
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>