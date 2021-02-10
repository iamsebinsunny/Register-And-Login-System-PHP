  <!--navbar -->
 
    <nav class="navbar navbar-expand-lg navbar-light  text-white display-4" style="background-color: black; font: caption; ">
  <a class="navbar-brand text-white" href=""><h2><?php if ($_SESSION["userName"]!=='admin') {
    echo "Home";
  } else {
    echo "Admin Panel";
  }
   ?></h2></a>
  

    <div class="navbar-nav ml-auto">
      <li class="nav-item dropdown ">
        <ul>
           <a class="navbar-brand dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php  echo  $_SESSION["firstName"]; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        
          <a class="dropdown-item" href="inc/logoutServer.inc.php">Log out</a>
        </div>
      </li>
  </ul>
  </div>
  </nav>