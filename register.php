<?php
include_once './config/database.php';

if(isset($_POST['submit'])){
$file = "images"."-".rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="./assets/upload/";

/* new file size in KB */
$new_size = $file_size/1024;  
/* new file size in KB */

/* make file name in lower case */
$new_file_name = strtolower($file);
/* make file name in lower case */

$final_file=str_replace(' ','-',$new_file_name);

if(move_uploaded_file($file_loc,$folder.$final_file)) {
// $sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
// mysqli_query($conn,$sql);
// echo "File sucessfully upload.";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$DOB = $_POST['DOB'];

$email = $_POST['email'];
$password = $_POST['password'];
$beforeHash = $email . $password;
$hash = md5($beforeHash);

if($email == null ){
  $msg = "Required fields.";
    $msgEncoded = base64_encode($msg);
    header("location:login.php?msg=".$msgEncoded);
} else {
  $sql = "INSERT INTO User (first_name,last_name,phoneNumber,gender,address,DOB, email, password, image)
  VALUES ( '$first_name','$last_name','$phoneNumber','$gender','$address','$DOB', '$email', '$hash', '$final_file')";
  if ($conn->query($sql) === TRUE) {
    //$message = "New record created successfully";
    header("location:login.php");
    $message = "New record created successfully";

    // echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
}
else{
echo "Error.Please try again";
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

.row.half-col {
    max-width: 600px;
    margin: auto;
    background: white;
    padding: 2rem 2rem 4rem 2rem;
    border-radius: 6px;
    margin-top: 5rem;
    box-shadow: 0px 6px 30px #80808040;
}
input, select, textarea {
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

.half-col > .col-12{
  margin: 0 5px;
  width: 48% !important;
}
.custom-file-upload.col-12 {
  margin: 0 5px;
  width: 98% !important;
}
input[type=date]{
  padding: 12px;
}

.custom-file-upload {
  /* padding: 11px 15px; */
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 5px !important;
  /* margin-bottom: 16px; */
  resize: vertical;
  background: white;
  width: fit-content;
  margin-bottom: 1rem !important;
}

select{
  padding: 14px;
}
.submit-row{
  width: 100%;
  text-align: center;
  display: flow-root;
}

@media screen and (max-width: 601px) {
  .half-col > .col-12{
    margin: 0 5px;
    width: 98% !important;
  }
}
</style>

<body>

<!-- Components for vote page  -->
  <?php require './src/component/menu.php' ?>
  
  <div style="padding: 5rem 0;">
  <form action="" method="POST"  enctype="multipart/form-data">
    <div class="container">

          <?php 
    if(isset($msg)){
      echo $msg;
    } 
?>


      <div class="row half-col">
      <h3 class="h1-heading" style="margin: auto; margin-bottom: 2rem;">Register</h3>
    <div class="col-12">
       <input type="text" id="first_name" name="first_name" placeholder="Your first name" required>
    </div>
    <div class="col-12">
       <input type="text" id="last_name" name="last_name" placeholder="Your last name" required>
    </div>
    <div class="col-12">
       <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phoneNumber" required>
    </div>
    <div class="col-12">
       <input type="text" id="email" name="email" placeholder="Your email" required>
    </div>
    <div class="col-12">
       <input type="date" id="age" name="DOB" placeholder="Your DOB" required>
    </div>
    <div class="col-12">
       <select name="gender" id="gender" required>
        <option disabled selected>select gender</option>
        <option value="male">male</option>
        <option value="female">female</option>
      </select>
    </div>
    <div class="col-12">
     <input type="text" id="password" name="password" placeholder="Your password" required>
    </div>
    <div class="col-12">
       <textarea type="text" id="address" name="address" placeholder="Your address" rows="1" required></textarea>
    </div>
    
    <div class="custom-file-upload col-12">
    <input type="file" name="file" required/>
    </div>
    <div class="submit-row">
      <button type="submit" value="Submit" name="submit" class="">Register</button>
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