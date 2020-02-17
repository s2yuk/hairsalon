<?php
include 'adminMenu.php';

$hairCatalogList = $Hairsalon->displayCatalog();
$oneCatalogID = $Hairsalon->getCatalogID($catalogID);



?>
<!doctype html>
<html lang="en">
  <head>
    <title>catalog feedback page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    


</head>
  <body>
  

      <div class="container mt-3">

        <h3 class="display-4 text-monospace text-center"> catalog's feedback</h3>
            <?php 
           
             foreach($hairCatalogList as $row){

                echo "<div class='row border'>";
                    echo "<div class='col-lg-6'>";

                        $uploaded_photo = $row['catalog_photo'];
                        echo "<img src='upload/admin/catalog/$uploaded_photo' alt='' class='w-75 m-3'　id='' >";
                
                    echo "</div>";
                    echo "<div class='col-lg-6'>";
                            echo"<div class='row mt-5'>";
                                echo $row['catalog_comment']; 
                            echo "</div>";
                            echo "<br>";
                            echo "<p class='text-right'> styled by : ".$row['photo_stylist']."</p>";
                            echo "<hr>";
                            
                            
                            $catalogID= $row['catalog_id'];
                            $comments=$Hairsalon->displayCatalogComment($catalogID);
               
                            foreach($comments as $row2){
                                echo $row2['comment'];
                                echo "<br>";
                                echo "<p class='text-right'>comment by:".$row2['user']."</p>";
                                echo "<br>";
                            }
                           
                              
                           
                            echo "<br>";
                            echo "<br>";
                            echo "<hr>";
                        
                            echo "<form action='hairsalonAction.php' method='post'>";
                            ?>
                                <input type="hidden" name="fname" value="<?php echo $currentUser['fname'] ?>">
                                <input type="hidden" name="catalog_id" value="<?php echo $row['catalog_id'] ?>">

                                <input type="text" name="content" class = 'form-control' placeholder='add a comment' id="">
                                    
                                <button type="submit" name='send' class="btn btn-outline-dark float-right mt-3">Post Comment</button>


                           <?php
                            echo "</form>";
                            
                         
                        
                    echo "</div>";
                echo "</div>";

                }

            ?>
        </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>