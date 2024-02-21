
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

<h1 class="h1-heading">Feedback Table</h1>


<form action="contestant-create-function.php" method="POST">
<div class="container">
  <div class="row half-col">
    <div class="col-12">
       <input type="text" id="first_name" name="first_name" placeholder="Your first name">
    </div>
    <div class="col-12">
       <input type="text" id="last_name" name="last_name" placeholder="Your last name">
    </div>
    <div class="col-12">
       <input type="text" id="city" name="city" placeholder="Your city">
    </div>
    <div class="col-12">
       <input type="number" id="age" name="age" placeholder="Your age">
    </div>

    <div class="col-12">
       <input type="text" id="votes" name="votes" placeholder="Your votes">
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