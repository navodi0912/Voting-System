<!-- Don't consider about this. I added this for clear php cache  -->
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>leaderboard</title>
  <link rel="stylesheet" href="./assets/css/main-style.css">
  <link rel="stylesheet" href="./assets/css/columns.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <link rel="stylesheet" href="./assets/css/slider.css">
  <link rel="stylesheet" href="./assets/css/footercss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link rel="stylesheet" href="./assets/css/leaderboardstyles.css">
</head>
<style>
  /* Style tab links */
.tablink {
  background-color: #f43629;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.33%;
}

.tablink:hover {
  background-color: #f3f3f3;
  color: #01193f;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  /* color: white; */
  display: none;
  padding: 100px 20px;
  height: 100%;
}
</style>

<body>

<!-- Components for Leaderboard page  -->
  <?php require './src/component/menu.php' ?>

  <div class="body-part">

  <?php require './src/leaderboard/main.php' ?>

  </div>
  
  <?php require './src/component/footer.php' ?>


<!-- External js files  -->
<script src="./assets/js/menu.js"></script>
<script src="./assets/js/slider.js"></script>
<script src="./assets/js/tab.js"></script>


</body>

</html>