<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <p class="home_links"><a href="index.php?page=home_page&AMP;section=php">PHP</a> 
       | <a href="index.php?page=home_page&AMP;section=zodiac">Chinese Zodiac</a></p>
   <?php
        if(isset($_GET['section'])){
            switch($_GET['section']){
                case 'zodiac':
                    include("inc_chinese_zodiac.php");
                    break;
                case 'php':
                default:
                    include("inc_php_info.php");
                    break;
            }
	}
	else{
            include("inc_php_info.php");
	}
    ?>
</div>