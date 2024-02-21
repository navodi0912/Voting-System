<?php
include_once '../config/database.php';
$file = "contestant"."-".rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
$file_size = $_FILES['file']['size'];
$file_type = $_FILES['file']['type'];
$folder="../upload/";

/* new file size in KB */
$new_size = $file_size/1024;  
/* new file size in KB */

/* make file name in lower case */
$new_file_name = strtolower($file);
/* make file name in lower case */

$final_file=str_replace(' ','-',$new_file_name);

if(move_uploaded_file($file_loc,$folder.$final_file)) {

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
      $sql = "INSERT INTO Contestant (first_name,last_name,city,age,votes,image)
      VALUES ( '$first_name','$last_name','$city','$age','$votes', '$final_file')";
      if ($conn->query($sql) === TRUE) {
        //$message = "New record created successfully";
        header("location:../contestant/contestant-main.php");
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

mysqli_close($conn);
?>