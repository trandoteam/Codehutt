<?php
session_start();
?>

    <div class="container-fluid navt" id="header">
<nav class="navbar container">
    <div class="logo">
        <a href="./"><img src="img/logo.png" alt=""></a>
    </div>
    <div class="butt">
    <a class="btn btn-link " onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>
   <div class="menu" >
   <ul class="list">
        <li><a href="./">Home</a></li>
        <li id="option1">
            <div id="dropdown">
            <a href="pages/courses.php"  id="dropbtn">Coding For <i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div id="dropdown-content" style="z-index:99">
        <a id="links" href="#">5th Standard</a>
        <a id="links" href="#">6th Standard</a>
        <a id="links" href="#">7th to 9th Standard</a>
        <a id="links" href="#">Above 9th Standard</a>
       </div>
            </div>
       </li>
        <li><a href="#">Blog</a></li>
        <li><a href="pages/about.php">About</a></li>
        <?php 
            if(isset($_SESSION['username'])){
                echo '<li><a  id="demo">'.$_SESSION['username'].'</a></li>';
            }
            else{
                echo '<li><a href="account/" id="demo">Login</a></li>';
            }

        ?>
       
        
        <!-- <li><a class="demo" id="demo" href="#"><i style="font-size:30px;top:8px;left:5px;position:absolute;padding-right:10px;" class="fa fa-bookmark" aria-hidden="true"></i> <span style="margin-left:15px">Book A Free Demo</span></a></li> -->
    </ul>
   </div>


   <!-- sidenav -->
   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <a href="#">Home</a>
     
            <div id="dropdown">
            <a href="#"  id="dropbtn">Coding For <i class="fa fa-caret-down" aria-hidden="true"></i></a>
        <div id="dropdown-content" style="z-index:99; background-color: rgb(0, 0, 0);min-width: 200px;padding: 5px;box-shadow:0px 0px 3px rgb(230, 230, 230);  margin-left: 20px;z-index: 1;">
        <a id="links" href="#">5th Standard</a>
        <a id="links" href="#">6th Standard</a>
        <a id="links" href="#">7th to 9th Standard</a>
        <a id="links" href="#">Above 9th Standard</a>

       </div>
            </div>
   
        <a href="pages/blog.php">About</a>
        <a href="pages/about.php">Blog</a>
        <a href="account/">Login</a>
        
    </ul>
</div>
</nav>
</div>
