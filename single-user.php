
<!-- Don't consider about this. I added this for clear php cache  -->
<?php
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>

<?php
include_once './config/database.php';

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM Contestant where id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="./assets/css/main-style.css">
  <link rel="stylesheet" href="./assets/css/columns.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <link rel="stylesheet" href="./assets/css/slider.css">
  <link rel="stylesheet" href="./assets/css/footercss.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<style>
  .single-img{
    width: 300px;
    height: 300px;
    object-fit: cover;
    border-radius: 6px;
  }
  .vote-box{
    background-color: #f43729;
    padding: 3px 50px;
    border-radius: 6px;
    width: fit-content;
    color: white;
  }
  p {
    padding: 3px;
}
.container {
    padding: 2rem 0;
}
.content-box{
  background-color: #e7e7e7;
  padding: 2rem;
  border-radius: 6px;
    height: 300px;
    width: 100%;
}
h2 {
    padding-bottom: 1rem;
}
</style>
<body>
  
<?php require './src/component/menu.php' ?>

<div class="body-part">

 <!-- <?php echo $row['first_name']; ?> -->

 <div class="container">
   <div class="row">
     <div class="col-4">
       <img src="<?php echo 'http://localhost/votingsystem/admin/upload/',$row["image"]; ?>" alt="" class="single-img">
     </div>
     <div class="col-8">
      <div class="content-box">
        <h2><?php echo $row['first_name'], ' ', $row['last_name']; ?></h2>
        <p class="vote-box">Votes - <?php echo $row['votes']; ?></p>
        <p>City - <?php echo $row['city']; ?></p>
        <p>Age - <?php echo $row['age']; ?></p>
      </div>
       
     </div>
   </div>
 </div>
</div>

<?php require './src/component/footer.php' ?>


<!-- External js files  -->
<script src="./assets/js/menu.js"></script>
<script src="./assets/js/slider.js"></script>

</body>

</html>