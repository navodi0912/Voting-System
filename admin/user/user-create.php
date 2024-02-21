<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/columns.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

</style>
<body>

<?php require '../sidebar.php' ?>

<main>

<h1 class="h1-heading">User Table</h1>

<!-- <form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="upload">upload</button>
</form> -->

<form action="user-create-function.php" method="POST" enctype="multipart/form-data">
<div class="container">
  <div class="row half-col">
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
        <!-- Upload Image -->
    </div>
    <div class="submit-row">
      <button type="submit" value="Submit" class="">Submit</button>
    </div>
  </div>



</div>


</form>


</main>
    
</body>
</html>