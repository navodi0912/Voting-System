
<?php
include_once '../config/database.php';
$result = mysqli_query($conn,"SELECT * FROM User");
?>

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
<body>

<?php require '../sidebar.php' ?>

<main>

<div class="header-row">
<h1 class="h1-heading">User Table</h1>
<div style="padding-top: 1rem;">
<a href="user-create.php">
<button type="submit" value="Submit" class="">Create</button>
</a>
</div>
</div>

  <div class="">
  <table class="rwd-table">
    <tbody>
      <tr>
      <th scope="col">Id</th>
          <th scope="col">Full name</th>
          <th scope="col">phoneNumber</th>
          <th scope="col">gender</th>
          <th scope="col">DOB</th>
          <th scope="col">Email</th>
          <th scope="col">Update</th>
          <th scope="col">Delete</th>
      </tr>
      <?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>

      <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["first_name"] ," " ,$row["last_name"]; ?></td>
        <td><?php echo $row["phoneNumber"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["DOB"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <!-- <td><a href="./user-update.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning text-light">Update</a></td> -->
        <!-- <td><a href="delete-process.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger text-light">Delete</a></td> -->
        <!-- <form action="user-delete-function.php" method="post">
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
          <td><button type="submit" class="btn btn-danger text-light">Delete</button></td>
        </form> -->
       
        <td>
          <a href="./user-update.php?id=<?php echo $row["id"]; ?>">
          <i class="fa fa-pencil" tabindex="0"></i>
          </a>
        </td>
        <td>
          <a href="./user-delete-function.php?id=<?php echo $row["id"]; ?>">
          <i class="fa fa-trash" tabindex="0"></i>
          </a>
        </td>

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


</main>
    
</body>
</html>