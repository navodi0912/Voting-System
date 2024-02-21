<?php
include_once '../config/database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE Feed set id='" . $_POST['id'] . 
"', category='" . $_POST['category'] . "', description='" . $_POST['description'] . "', Title='" . $_POST['Title'] . "', videoId='" . $_POST['videoId'] 
. "', adminId='" . $_POST['adminId'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header("location:../feed/feed-main.php");
}
$result = mysqli_query($conn,"SELECT * FROM Feed WHERE id='" . $_GET['id'] . "'");
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
                        <input type="text" id="category" name="category" placeholder="category" value="<?php echo $row['category']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="text" id="description" name="description" placeholder="" value="<?php echo $row['description']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="text" id="Title" name="Title" placeholder="Your" value="<?php echo $row['Title']; ?>">
                    </div>

                    <div class="col-12">
                        <input type="number" id="videoId" name="videoId" placeholder="Your" value="<?php echo $row['videoId']; ?>">
                    </div>
                    <div class="col-12">
                        <input type="number" id="adminId" name="adminId" placeholder="Your" value="<?php echo $row['adminId']; ?>">
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