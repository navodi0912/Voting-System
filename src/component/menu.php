
<?php
include_once './config/database.php';
// session_start();
if(!isset($_SESSION)) { 
  session_start(); 
} 

// if(isset($_SESSION["vuser"])) {
//   echo $_SESSION["vusername"];
// }


?>

<div class="topnav" id="myTopnav">
    <div class="menu-content">
      <a href="index.php">
        <img src="./assets/images/logo.png" alt="" class="nav-logo">
      </a>
      <a href="index.php" class="active">Home</a>
      <a href="vote.php">Vote</a>
      <a href="leaderboard.php">Leaderboard</a>
      <a href="feed.php">Feed</a>
      <a href="contact-us.php">Contact Us</a>
    </div>

    <?php if(isset($_SESSION["vusername"])) { ?>
      
      <div class="nav-btn-row">
         <a href="user-profile.php"> Welcome <?= $_SESSION["vusername"] ?></a>
      <a href="logout.php"><div class="nav-button">Logout</div></a>
    </div>
    <?php } else { ?>
      <div class="nav-btn-row">
      <a href="register.php"><div class="nav-button">Register</div></a>
      <a href="login.php"><div class="nav-button">Login</div></a>
    </div>

       <?php } ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
