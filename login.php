

<?php
include_once './config/database.php';
// session_start();
if(!isset($_SESSION)) { 
  session_start(); 
} 


// session_write_close();
// if(isset($_SESSION["vuser"])) {
//   header("location:index.php");
// }

if(isset($_POST["submit"])){
  $email = $_POST['email']; 
  $password = $_POST['password'];

  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);
  $beforeHash = $email . $password;
  $hashPassword = md5($beforeHash);

    $sql = "select * from User where email = '$email' and password = '$hashPassword'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    // $row = mysqli_fetch_array($result);
    if($count > 0){
      
      $_SESSION["vuser"] = "vuser";
      $_SESSION["vusername"] = $row['first_name'];
      // echo $_SESSION["vadmin"];
      header("location:./index.php");
      // echo "<h1 style='text-align:center; color: green;'>Yeahoooo!!!!</h1><h1 style='text-align:center; color: green;'>Logged in Successfully!!!!</h1>";
    }
    else{
      $msg = 'Username or password Wrong!';
      // echo "<h4 style='text-align:center; color: red;'>User name or password Wrong!</h4>";
    }
  }

mysqli_close($conn);
?>

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
</head>
<style>
  input, select, textarea {
  width: 100%;
  padding: 15px;
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
body{
    padding: 0;
}
.half-col > .col-12 {
    margin: 0 5px;
    width: 100% !important;
}
.row.half-col {
    max-width: 400px;
    margin: auto;
    background: white;
    padding: 2rem 2rem 4rem 2rem;
    border-radius: 6px;
    margin-top: 5rem;
    box-shadow: 0px 6px 30px #80808040;
}
input {
    background: #e7e7e7;
}
.h1-heading {
    padding: 10px 40px;
    margin-bottom: 2rem;
    border: none;
    background-color: #fff;
    color: #01193f;
    box-shadow: 0 0 6px #e1e1e11a;
    width: -moz-fit-content;
    width: fit-content;
    font-size: 30px;
    font-weight: 600;
}
button {
    height: 45px;
    min-width: 130px;
    border-radius: 5px;
    border: none;
    color: #fff;
    background: #2ECC71;
    font-weight: 400;
    font-size: 14px;
    cursor: pointer;
    padding: 0 30px;
}
.submit-row{
  width: 100%;
  text-align: center;
  display: flow-root;
}
</style>

<body>

<!-- Components for vote page  -->
  <?php require './src/component/menu.php' ?>
  
  <div style="padding: 5rem 0;">
  <form action="" method="POST">
    <div class="container">
      <div class="row half-col">
        <h3 class="h1-heading" style="margin: auto; margin-bottom: 2rem;">Login</h3>
        <div class="col-12">
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="col-12">
          <input type="password" id="password" name="password" placeholder="Password">
        </div>

        <span style='text-align:center; color: red;'>
          <?php 
    if(isset($msg)){
      echo $msg;
    } 
?>
        </span>
        <div class="submit-row">
          <button type="submit" name="submit" value="submit" class="">Login</button>
        </div>
      </div>
    </div>
  </form>
</div>


  <?php require './src/component/footer.php' ?>

  
<!-- External js files  -->
<script src="./assets/js/menu.js"></script>
<!-- <script src="./assets/js/slider.js"></script> -->

</body>

</html>