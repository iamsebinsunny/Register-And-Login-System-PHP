<?php 
session_start();
require 'inc/config.inc.php';
 if (!isset($_SESSION["userName"])) {
       	header('location: ../index.php');
    	}
?>

<html lang="en">
  <head>
  
   <link rel="stylesheet" href="css/adminUserScreen.css">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
    <title>Admin</title>
  </head>

  <body >
  	<?php include "navbar.php";
    include "head-link.php" ;?>
<!-- table -->

<?php


$sql = "SELECT * FROM users WHERE uName != 'admin'";
$result = mysqli_query($db, $sql); 
echo "<br>";
echo "<table class='table'>";
echo "<thead>
    <tr>
      <th scope='col'>UserId</th>
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
      if($field === 'uid') {
        $uid = $value;
      }
      echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
    }
    echo "<td> <a class='fas fa-user-edit'  href='editScreen.php?uid=$uid'></a> </td>";
    echo "<td> <a style='color:red;' class='fas fa-trash-alt '   onClick='myFunction()' href='inc/deleteUser.inc.php?uid= $uid'></a> </td>";
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
?>
<script>
function myFunction() {
  alert("Account deleted successfully");
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
  </body>
</html>


