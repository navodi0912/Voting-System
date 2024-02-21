<?php
include_once '../config/database.php';

// if(isset($_POST['ok'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $votes = $_POST['votes'];

    if($first_name == null )
    {
      $msg = "Required fields.";
        $msgEncoded = base64_encode($msg);
        header("location:../contestant/contestant-main.php?msg=".$msgEncoded);
    } else {
      $sql = "INSERT INTO Contestant (first_name,last_name,city,age,votes)
      VALUES ( '$first_name','$last_name','$city','$age','$votes')";
      if ($conn->query($sql) === TRUE) {
        //$message = "New record created successfully";
        header("location:../contestant/contestant-main.php");
        $message = "New record created successfully";

        // echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }

mysqli_close($conn);
?>