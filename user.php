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
    <?php 
    include 'navbar.php'; ?>
    <title>Home</title>
  </head>

  <body>
  	
<?php include 'landingPage/index.html'; ?>
   
  </body>
</html>








