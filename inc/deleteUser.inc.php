<?php

             if (isset($_GET["uid"])) {
                require 'config.inc.php';
                    $UserId = $_GET["uid"];
                   echo "Found UserId" . $UserId;
                }

               $sql = "DELETE FROM users WHERE uid= $UserId";

if ($db->query($sql) === TRUE) {
  echo "Record deleted successfully";
   header("location: ../adminHomeScreen.php");
} else {
  echo "Error deleting record: " . $db->error;
}
                
 ?>