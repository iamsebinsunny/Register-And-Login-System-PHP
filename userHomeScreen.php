<?php 
session_start();
 if (!isset($_SESSION["userName"])) {
       	header('location: ../index.php');
    	}

if (isset($_SESSION["userName"])) {
         $loggenOnUser = $_SESSION["firstName"];
         $userid  = $_SESSION["userID"];
      } 
?>


<html lang="en">
  <head>
  

    <?php include "head-link.php" ?>
    <title>Home</title>
  </head>

  <body>
  	<!--navbar -->
  	<nav class="navbar navbar-expand-lg navbar-light  text-white display-4" style="background-color: #cbcdca; font: caption; ">
  <a class="navbar-brand text-white" href="userHomeScreen.php"><h2>Home</h2></a>
  

    <div class="navbar-nav ml-auto">
      <li class="nav-item dropdown ">
      	<ul>
      		 <a class="navbar-brand dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	<?php  echo $loggenOnUser ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="inc/editUser.inc.php?uid= <?php echo $userid ?>">Edit Account</a>
          <a class="dropdown-item" href="inc/logoutServer.inc.php">Log out</a>
        </div>
      </li>
  </ul>
  </div>
  </nav>



   
  </body>
</html>








