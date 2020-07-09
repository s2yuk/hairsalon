<?php
include 'userMenu.php';
$reviewList = $Hairsalon->displayReviewList()

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
        body{
          margin-top:150px;
        
          background-image: url(asset/logo1.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
        }
        div h5{
            font-family: 'Oleo Script', cursive;
        }
      </style>
      <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">

</head>
  <body>
        <div class="container bg-white w-75 mx-auto mt-3 rounded text-center">
            <h5 class="display-4 p-3">Testimonials</h5>
            <p class="text-monospace"><?php echo count($reviewList);?> of customers would refer freinds and familiy to us</p>
        </div>
        
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-8">
                        <?php foreach($reviewList as $row):?>
                        <div class="card mx-auto mt-2">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p class="text-monospace">Nickname :  <?php echo $row['nickname']?></p>
                                    </div>
                                    <div class="col-lg-2 text-center">
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
                                    <div class="col-lg-6">
                                        <p>
                                            <?php 
                                            // echo $row['rating'];
                                                for($x= 0; $x< $row['rating']; $x++){
                                                    echo "★";
                                                }
                                            ?>
                                        </p>
                                    </div> 
                                    <div class="col-lg-6 text-right">
                                        <p><?php echo $row['date']?></p>
                                    </div> 
                                </div>
                                            
                                <p class="lead"><?php echo $row['comment']?></p>

                                <br>
                                <?php 
                                    if(!empty($row['photo'])){
                                        $photo = $row['photo'];
                                        echo "<img src='upload/user/testimonial/$photo' alt='reviewPhoto' class='img-thumbnail w-50'>";
                                    }
                                
                                ?>

                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                    </div>
                                    <div class="col-lg-6 text-right">                        
                                        <a href="updateTestmonial.php=review_id=<?php echo $row['review_id']?>" role="button" class="btn btn-outline-dark">edit</a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        
                    <?php endforeach ;?>
                </div>
                <div class="col-lg-4 text-monospace">
                    <div class="container mt-3 p-3 bg-light rounded">
                        <form action="hairsalonAction.php" method="post" enctype="multipart/form-data">
                    
                        <label for="">NickName</label>
                        <input type="text" name="nickname" id="" class="form-control" required> <br>

                        <label for="">Date</label>
                        <input type="date" name="date" id="">
                        <br>
            
                        <label for="">Rating</label>
                        <select name="rating" id="" required class="form-control">
                            <option value="">-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <br>
                        <label for="">Comments</label>
                            <textarea name="comment" id="" cols="30" rows="10"></textarea>

                        <label for="">Photo</label>
                        <input type="file" name="photo" id="" class="form-control">
                        
                        <button type="submit" name="review" class=" btn btn-dark form-control mt-3">Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

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