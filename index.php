<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
  </head>
  <body>
      <!-- CONTAINER -->
      
      <div class="container">
        <div class="jumbotron">
            <h1>Chinese Zodiac</h1>
        </div>
        <nav class="navbar navbar-inverse">
            <?php include('includes/inc_nav.php'); ?>
        </nav>
        <div class="col-md-12">
            <?php
            //Check if GET is set:
                if(isset($_GET['page'])){
                    switch($_GET['page']){
                        default:
                            include("includes/inc_home.php");
                            break;
                    }
                }
                else{
                    include("includes/inc_home.php");
                }
            ?>
        </div>
      </div>
      <!-- END CONTAINER -->
      
      <div class="container">
        <footer>
            <?php include("includes/inc_footer.php"); ?>
        </footer>  
      </div>
      
  </body>
</html>