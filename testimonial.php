<?php
include 'navbar.php';
$reviewList = $Hairsalon->displayReviewList();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>testimonial</title>
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
          margin-top:150px;
          background-image: url(asset/logo1.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
        }
        #title{
            font-family: 'Oleo Script', cursive;
        }
        #review-form{
            padding-top:100px;
            margin-top:-100px;
        }
        #review-form-link{
            display: none;
        }
         /* --------------------------------- */
        footer{
            position: relative;
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
            #review-form{
                margin-top: 10px;
            }
            #review-form-link{
                display:block;
            }
        }
        @media(max-width:670px){
            #title{
                font-size: 40px;
            }
            .lead{
                font-size: 0.9rem;
            }
        }
      </style>
</head>
  <body>
        <div class="container bg-white w-75 mx-auto mt-3 rounded text-center">
            <h5 class="display-4 p-3" id="title">Testimonials</h5>
            <p>レビュー</p>
            <p class="text-monospace"><?php echo count($reviewList);?> of customers would refer freinds and familiy to us</p>
        </div>
        <div class="container text-center" id="review-form-link">
            <a href="#review-form" class="btn btn-secondary">レビューを投稿する</a>
        </div>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8">
                        <?php foreach($reviewList as $row):?>
                        <div class="card mx-auto mt-2">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-10">
                                        <p class="text-monospace">Nickname :  <?php echo $row['nickname']?></p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <form action="hairsalonAction.php" method="post">
                                            <!-- <?php //echo $row['review_id'];?> -->
                                            <input type="hidden" name="review_id" value="<?php echo $row['review_id'];?>">
                                            <?php 
                                            if($loginid==$row['login_id']){
                                                echo "<button type='submit' name='delete_testimonial'class='btn btn-outline-danger btn-sm'> <i class='fa fa-trash' aria-hidden='true'></i></button>";
                                            }
                                            ?>                                    
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <p>
                                            <?php 
                                            // echo $row['rating'];
                                                for($x= 0; $x< $row['rating']; $x++){
                                                    echo "★";
                                                }
                                            ?>
                                        </p>
                                    </div> 
                                    <div class="col-6 text-right">
                                        <p><?php echo $row['date']?></p>
                                    </div> 
                                </div>          
                                <p class="lead"><?php echo nl2br($row['comment']);?></p>
                                <br>
                                <?php 
                                    if(!empty($row['photo'])){
                                        $photo = $row['photo'];
                                        echo "<img src='upload/user/testimonial/$photo' alt='reviewPhoto' class='img-thumbnail w-50'>";
                                    }
                                ?>
                            </div>
                        </div>
                    <?php endforeach ;?>
                </div>
                <div class="col-lg-4 text-monospace" id="review-form">
                    <div class="container mt-lg-2 p-3 bg-light rounded">
                        <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                    
                        <label for="">NickName :</label>
                        <input type="text" name="nickname" id="" class="form-control" required placeholder="投稿ネーム">
                        <br>

                        <label for="">Date 来店日:</label>
                        <input type="date" name="date" id="">
                        <br>

                        <label for="">Rating 評価:</label>
                        <select name="rating" id="" required class="form-control">
                            <option value="">選択してください</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br>
                        <label for="">Comments :</label>
                            <textarea name="comment" id="" cols="30" rows="10" placeholder="コメント欄" class="form-control"></textarea>
                        <br>
                        <label for="">Photo :</label>
                        <input type="file" name="photo" id="" class="">
                        <br>
                        <button type="submit" name="review" class=" btn btn-secondary form-control mt-3">投稿する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

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