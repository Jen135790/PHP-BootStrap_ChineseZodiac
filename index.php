<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    
  </head>
  <body>
      <!-- CONTAINER -->
      
      <div class="container">
        <div class="jumbotron">
            <h1>Chinese Zodiac<br/>&nbsp;&nbsp;<small>With PHP</small></h1>
        </div>
        <nav class="navbar navbar-inverse">
            <?php include('includes/inc_nav.php'); ?>
        </nav>
        
        <div class="contents col-md-12">
            <?php
            //Check if GET is set:
                if(isset($_GET['page'])){
                    switch($_GET['page']){
                        case 'site_layout':
                            include("includes/inc_site_layout.php");
                            break;
                        case 'control_structures':
                            include('includes/inc_control_structures.php');
                            break;
                        case 'ifElse':
                            include('includes/inc_zodiac_ifelse.php');
                            break;
                        case 'switchStatement':
                            include('includes/inc_zodiac_switch.php');
                            break;
                        case 'whileLoop':
                            include('includes/inc_table_while.php');
                            break;
                        case 'forLoop':
                            include('includes/inc_table_for.php');
                            break;
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
      
      <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="scripts/bootstrap.js"></script>
  </body>
</html>