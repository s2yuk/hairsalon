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
          margin-top:100px;
        
          background-image: url(asset/logo1.jpeg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center center;
          background-size :cover ;
  
        }
      </style>

</head>
  <body>
        <div class="bg-white w-50 mx-auto rounded text-center">
            <p class="display-4 text-monospace">Testimonials</p>
            <p class="text-monospace"><?php echo count($reviewList);?> of customers would refer freinds and familiy to us</p>
        </div>
        
        <div class="container mb-5 ">
            <div class="row">
                <div class="col-lg-8">
                        <?php foreach($reviewList as $row):?>
                        <div class="card mx-auto mt-2">
                            <div class="card-header">
                                <p class="text-monospace">Nickname :  <?php echo $row['nickname']?></p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p>
                                            <?php 
                                            // echo $row['rating'];
                                            for($x=0; $x< $row['rating']; $x++){
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
                                        echo "<img src='upload/$photo' alt='reviewPhoto' class='img-thumbnail w-50'>";
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
                        <input type="text" name="nickname" id="" class="form-control"> <br>

                        <label for="">Date</label>
                        <input type="date" name="date" id="">
                        <br>
            
                        <label for="">Rating</label>
                        <select name="rating" id="">
                            <option value="1" class="form-control">1</option>
                            <option value="2" class="form-control">2</option>
                            <option value="3" class="form-control">3</option>
                            <option value="4" class="form-control">4</option>
                            <option value="5" class="form-control">5</option>
                        </select>
                        <br>
                        <label for="">Comments</label>
                            <textarea name="comment" id="" cols="30" rows="10" class="form-control">
                            </textarea>

                        <label for="">Photo</label>
                        <input type="file" name="photo" id="" class="form-control">
                        
                        <button type="submit" name="review" class="form-control mt-3">Review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br><br>


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