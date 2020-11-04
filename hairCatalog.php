<?php
// include 'userMenu.php';
include 'navbar.php';

$hairCatalogList = $Hairsalon->displayCatalog();

$loginid=$_SESSION['loginid'];
$currentUser = $Hairsalon->getOneUser($loginid);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>catalog</title>
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
        }
        #hairCatalog{
            width:250px;
            height:250px;
            object-fit: cover;
        }
        #pGrey{
            color: grey;
        }
        div h5{
            font-family: 'Oleo Script', cursive;
        }
        @media(max-width:1000px){
            .header-center ul{
                position: fixed;
                top: 80px;
                left:50px;
                margin-left:0px;
            }
            /* ------------------- */
            #catalog-box{
                margin:0 auto;
                display: flex;
                flex-wrap: wrap;
            }
            #catalog-btn{
                flex:auto;
                width: 30%;
            }
            #hairCatalog{
                width: 100%;
                height: width;
            }
            .comment-form{
                width:100%;
            }
            .comment-form button{
                width: 25%;
            
            }
        }
        @media(max-width:770px){
            #catalog-btn{
                width: 30%;
                height: 30%;
            }
            #hairCatalog{
                height: 150px;
            }
        }
        @media(max-width:400px){
            #catalog-btn{
                width: 30%;
                height: 30%;
            }
            #hairCatalog{
                height: 100px;
            }
        }
    </style>
</head>
<body>
    <div class="bg-white w-50 mx-auto rounded text-center">
        <h5 class="display-4">Catalog</h5>
        <p class="text-monospace">
            <?php echo count($hairCatalogList);?> of picture 
        </p>
    </div>
    <div class="container text-center" id="catalog-box">
        <!-- Button trigger modal -->
        <?php foreach($hairCatalogList as $row) {
        
            $modalID = $row['catalog_id'];
            
            echo "<button type='button' name='".$row['catalog_id']."' id='catalog-btn' class='btn btn-outline-dark' data-toggle='modal' data-target='#modalID_$modalID'>";
                $uploaded_photo = $row['catalog_photo'];
                echo "<img src='upload/admin/catalog/$uploaded_photo' alt='hair catalog photo' class='catalog-photo' id='hairCatalog'>";
            echo"</button>";

        //  <!-- Modal -->
            echo "<div class='modal' id='modalID_$modalID' tabindex='-1' role='dialog' aria-labelledby='exampleModalScrollableLabel' aria-hidden='true'>";

            echo "<div class='modal-dialog modal-dialog-scrollable modal-lg' role='document'>";
                echo "<div class='modal-content'>";

                echo " <div class='modal-header'>";
                    echo "<h5 class='modal-title' id='exampleModalCenteredLabel'>Style by: ".$row['photo_stylist']."</h5>";
                    echo "<button type='button' class='close mr-0' data-dismiss='modal' aria-label='Close'>";
                        echo "<span aria-hidden='true' class=''>×</span>";
                    echo "</button>";
                echo "</div>";
                echo "<div class='modal-body'>";
                    echo "<div class='row'>";
                        echo "<div class='col-lg-7'>";

                            $uploaded_photo = $row['catalog_photo'];
                            echo "<img src='upload/admin/catalog/$uploaded_photo' alt='' class='w-100' id='modal_photo' >";
                    
                        echo "</div>";
                        echo "<div class='col-lg-5'>";
                                echo"<div class='row p-3'>";
                                    echo "<h5>".$row['catalog_comment']."</h5>"; 
                                echo "</div>";
                                // echo "<br>";
                                echo "<hr>";


                                // $catalogID= $row['catalog_id'];
                                // $comments=$Hairsalon->displayCatalogComment($catalogID);
                                $comments = $Hairsalon->displayCatalogComment($row['catalog_id']);



                                // print_r($comments);
                                foreach($comments as $row2){
                                    echo "<form action='hairsalonAction.php' method='post'>";
                                
                                    echo "<p class='text-left'>".$row2['comment']."</p>";
                                    echo "<p class='text-right' id='pGrey'>comment by:".$row2['user'];
                                        if($loginid==$row2['user_id']){
                                            // echo $row2['comment_id'];
                                            echo "<input type='hidden' name='comment_id' value=".$row2['comment_id'].">";
                                            echo "<button type='submit' name='delete_comment'class='btn btn-outline-danger'> <i class='fa fa-trash' aria-hidden='true'></i></button>";
                                        }                     
                                    echo "</p>";
                                    echo "</form>";
                                }
                                ?>
                                <br>
                                <div class='comment-form'>
                                    <form action='hairsalonAction.php' method='post'>
                                        <input type="hidden" name="fname" value="<?php echo $currentUser['fname'] ?>">
                                        <input type="hidden" name="catalog_id" value="<?php echo $row['catalog_id'] ?>">
                                        
                                        <div class="">
                                            <input type="text" name="content" class="form-control" placeholder="コメント" required>
                                            <button type="submit" name='send' class="btn btn-primary float-right">Post</button>
                                        </div>
                                    </form>    
                                </div>
                                    
                            <?php
                        echo "</div>";
                    echo "</div>";
                    
                echo "</div>";
                echo "<div class='modal-footer'>";
                    echo "<button type='button' class='btn btn-outline-secondary' data-dismiss='modal'>Close</button>";
                echo "</div>";
                echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <!-- js -->
    <!-- <script type="text/javascript" src="asset/js/image.js"></script> -->
 

  </body>
</html>