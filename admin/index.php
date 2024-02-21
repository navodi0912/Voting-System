<?php
include_once './config/database.php';

session_start();


if(isset($_SESSION["vadmin"])) {
  // header("location:index.php");
} else{
  header("location:./userlogin.php");
}

$resultuser = mysqli_query($conn,"SELECT * FROM User");
$resultfeed = mysqli_query($conn,"SELECT * FROM Feed");
$resultfeedback = mysqli_query($conn,"SELECT * FROM Feedback");

$resultContestant = mysqli_query($conn,"SELECT * FROM Contestant");

// mysqli_num_rows($resultfeed)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/css/style.css">
    <link rel="stylesheet" href="./styles/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php require './sidebar.php' ?>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="upload">upload</button>
</form> -->


<section class="home-section">
<nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img src="./styles/images/user1.jpeg" alt="">
        <span class="admin_name"><?= $_SESSION["vadminname"] ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
      <a href="logout.php"> 
        <button type="submit" value="Submit" class="">
      <span class="admin_name" style="margin-right:5px;">Logout</span>
        <i class='fa fa-lock'></i>
      </button>
      </a>
    </nav>
    
  <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number">
              <?php echo mysqli_num_rows($resultuser); ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='fa fa-user cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Contestant</div>
            <div class="number">
              <?php echo mysqli_num_rows($resultContestant); ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='fa fa-user cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Feed</div>
            <div class="number">
             <?php echo mysqli_num_rows($resultfeed); ?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='fa fa-paper-plane cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Feedback</div>
            <div class="number">
              <?php echo mysqli_num_rows($resultfeedback); ?>
            </div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='fa fa-rss cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">New users</div>
          <div class="sales-details">

          <table class="rwd-table">
    <tbody>
      <tr>
      <th scope="col">Id</th>
          <th scope="col">Full name</th>
          <th scope="col">email</th>
          <!-- <th scope="col">Update</th> -->
          <!-- <th scope="col">Delete</th> -->
      </tr>
      <?php
	$i=0;
	while($row = mysqli_fetch_array($resultuser)) {
	?>

      <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["first_name"], ' ', $row["last_name"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
       
        <!-- <td>
          <a href="./contestant-update.php?id=<?php echo $row["id"]; ?>">
          <i class="fa fa-pencil" tabindex="0"></i>
          </a>
        </td> -->
        <!-- <td>
          <a href="./contestant-delete-function.php?id=<?php echo $row["id"]; ?>">
          <i class="fa fa-trash" tabindex="0"></i>
          </a>
        </td> -->

        <span class="text-danger">
  <?php 
    if(isset($_GET['msg'])){
      echo base64_decode($_GET['msg']);
    } 
  ?>
</span>
      </tr>
      <?php
	$i++;
	} ?>
      
      
    </tbody>
  </table>

          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top rate contestant</div>
          <ul class="top-sales-details">
          <li style="background-color: #0A2558; border-radius:6px; padding: 3px 15px;">
            <a href="#">
              <span class="product" style="color:white;">Name</span>
            </a>
            <span class="price" style="color:white;">Votes</span>
          </li>
          <?php
	$i=0;
	while($row = mysqli_fetch_array($resultContestant)) {
	?>
            <li style="padding: 3px 15px;">
            <a href="#">
              <!-- <img src="./styles/images/user2.jpeg" alt=""> -->
              <span class="product"><?php echo $row["first_name"] ," " ,$row["last_name"]; ?></span>
            </a>
            <span class="price"><?php echo $row["votes"]; ?></span>
          </li>

          <?php
	$i++;
	} ?>
  
          </ul>
        </div>
      </div>
    </div>
  </section>


</main>
    
</body>
</html>