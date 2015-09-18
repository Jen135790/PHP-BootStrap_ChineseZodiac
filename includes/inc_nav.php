
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Navigation</a>
    </div>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="nav navbar-nav">
        <li <?php changeActiveClass("home_page"); ?>><a href="index.php?page=home_page">Home Page</a></li>
        <li <?php changeActiveClass("site_layout"); ?>><a href="index.php?page=site_layout">Site Layout</a></li>
        <li <?php changeActiveClass("control_structures"); ?>><a href="index.php?page=control_structures">Control Structures</a></li> 
        <li <?php changeActiveClass("string_functions"); ?>><a href="index.php?page=string_functions">String Functions</a></li> 
        <li <?php changeActiveClass("web_forms"); ?>><a href="index.php?page=web_forms">Web Forms</a></li> 
        <li <?php changeActiveClass("files"); ?>><a href="index.php?page=files">Files</a></li> 
        <li <?php changeActiveClass("state_information"); ?>><a href="index.php?page=state_information">State Information</a></li> 
        <li <?php changeActiveClass("object_oriented"); ?>><a href="index.php?page=object_oriented">Object Oriented</a></li> 
      </ul>
    </div>
</div>

<?php
    function changeActiveClass($currentPg){
        if(!isset($_GET['page'])){
            if($currentPg === "home_page"){
                echo 'class="active"';
            }
        }
        else{
            if($_GET['page'] == $currentPg){
                echo 'class="active"';
            }
        }
        
    }
?>