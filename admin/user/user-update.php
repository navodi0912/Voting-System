<?php
include_once '../config/database.php';
if(count($_POST)>0) {
    // (first_name,last_name,phoneNumber,gender,address,DOB, email, password)

mysqli_query($conn,"UPDATE User set id='" . $_POST['id'] . 
"', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', phoneNumber='" . $_POST['phoneNumber'] . "', gender='" . $_POST['gender'] .
"', address='" . $_POST['address'] . "', DOB='" . $_POST['DOB'] .
"', email='" . $_POST['email'] . "' ,password='" . $_POST['password'] 
. "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("location:../user/user-main.php");
}
$result = mysqli_query($conn,"SELECT * FROM User WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

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


    <?php include '../sidebar.php';?>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 m-auto card p-5">
                <h2 class="pb-3">Update user</h2>

                <?php if(isset($message)) { echo " <div class='alert alert-success' role='alert'>".$message. "</div>" ; } ?>

                <form name="frmUser" method="post" action="" class="half-col">
                <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
                    <div class="col-12">
                        <input type="text" id="first_name" name="first_name" placeholder="Your first name" value="<?php echo $row['first_name']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="text" id="last_name" name="last_name" placeholder="Your last name" value="<?php echo $row['last_name']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your phoneNumber" value="<?php echo $row['phoneNumber']; ?>">
                    </div>

                    <div class="col-12">
                        <input type="text" id="email" name="email" placeholder="Your email" value="<?php echo $row['email']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="date" id="age" name="DOB" placeholder="Your DOB" value="<?php echo $row['DOB']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="hidden" id="password" name="password" placeholder="Your password" value="<?php echo $row['password']; ?>">
                    </div>
                    <div class="col-12">
                        <select name="gender" id="gender" >
                            <option disabled selected >select gender</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <textarea type="text" id="address" name="address" placeholder="Your address" rows="1"><?php echo $row['address']; ?></textarea>
                    </div>

                    <div class="submit-row">
      <button type="submit" value="Submit" class="">Update</button>
    </div>
                </form>


            </div>

        </div>
    </div>

</body>

</html>