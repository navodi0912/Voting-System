
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

<h1 class="h1-heading">Feed Table</h1>


<form action="feed-create-function.php" method="POST" enctype="multipart/form-data">
<div class="container">
  <div class="row half-col">
    <div class="col-12">
       <input type="text" id="category" name="category" placeholder="category" required>
    </div>
    <div class="col-12">
       <input type="text" id="description" name="description" placeholder="description" required>
    </div>
    <div class="col-12">
       <input type="text" id="Title" name="Title" placeholder="Title" required>
    </div>
    <div class="col-12">
       <input type="number" id="videoId" name="videoId" placeholder="videoId" required>
    </div>

    <div class="col-12">
       <input type="text" id="adminId" name="adminId" placeholder="adminId" required>
    </div>

    <div class="custom-file-upload col-12">
    <input type="file" name="file" required/>
        Upload Image
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