 

 <?php

             if (isset($_GET["uid"])) {
                require 'config.inc.php';
                    $UserId = $_GET["uid"];
                   echo "Found UserId" . $UserId;
                }
                
 
$sql = "SELECT * FROM users WHERE uid = $UserId";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($result)) { 
    echo "<tbody>";
    echo "<tr>";
    foreach ($row as $field => $value) {
      echo "<td>" .$field .":". $value . "</td>"; 
      echo "<br>";
    }
    echo "</tr>";
    echo "<body>";
}

?>