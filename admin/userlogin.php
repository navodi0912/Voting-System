
<?php
include_once './config/database.php';
session_start();

if(isset($_SESSION["vadmin"])) {
  header("location:index.php");
}

if(isset($_POST["submit"])){
  $email = $_POST['email']; 
  $password = $_POST['password'];

  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);
  $beforeHash = $email . $password;
  $hashPassword = md5($beforeHash);

    $sql = "select * from Admin where Admin_Email = '$email' and Admin_Password = '$hashPassword'";
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  

    // $row = mysqli_fetch_array($result);
    if($count > 0){
      
      $_SESSION["vadmin"] = "vadmin";
      $_SESSION["vadminname"] = $row['First_name'];
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/css/style.css">
    <link rel="stylesheet" href="./styles/css/columns.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
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
    padding: 4rem 2rem;
    border-radius: 6px;
    margin-top: 5rem;
    box-shadow: 0px 6px 30px #80808040;
}
input {
    background: #e7e7e7;
}
</style>
<body>


<div>


<form action="" method="POST">
<div class="container">
  <div class="row half-col">
  <h1 class="h1-heading" style="margin: auto; margin-bottom: 2rem;">Register</h1>
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
      <button type="submit" name="submit" value="submit" class="">Register</button>
    </div>
  </div>



</div>


</form>


</div>
    
</body>
</html>