<?php 
session_start();
require 'inc/config.inc.php';
 if (!isset($_SESSION["userName"])) {
       	header('location: ../index.php');
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
  <a class="navbar-brand text-white" href="adminHomeScreen.php"><h2>Admin Panel</h2></a>
  

    <div class="navbar-nav ml-auto">
      <li class="nav-item dropdown ">
      	<ul>
      		 <a class="navbar-brand dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	<?php  echo  $_SESSION["firstName"]; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another </a>
          <a class="dropdown-item" href="inc/logoutServer.inc.php">Log out</a>
        </div>
      </li>
  </ul>
  </div>
  </nav>


    <?php
     if (isset($_SESSION["userName"])) {
         $loggenOnUser = $_SESSION["firstName"];
         echo "Found User: ", $loggenOnUser, "<br />";
    	} 
	?>
<!-- table -->

<?php


$sql = "SELECT * FROM users WHERE uid != '7'";
$result = mysqli_query($db, $sql); // First parameter is just return of "mysqli_connect()" function
echo "<br>";
echo "<table class='table'>";
echo "<thead>
    <tr>
      <th scope='col'>UsrId</th>
      <th scope='col'>First Name</th>
      <th scope='col'>Last Name</th>
      <th scope='col'>User Name</th>
       <th scope='col'>Phone No</th>
      <th scope='col'>User Email</th>
      <th scope='col'>Password</th>
      <th scope='col'>edit</th>
       <th scope='col'>delete</th>
    </tr>
  </thead>";
while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
	echo "<tbody>";
    echo "<tr>";
    foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
        echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
?>

   
  </body>
</html>


