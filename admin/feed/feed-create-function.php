<?php
include_once '../config/database.php';

$file = "feed"."-".rand(1000,100000)."-".$_FILES['file']['name'];
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
    $category = $_POST['category'];
    $description = $_POST['description'];
    $Title = $_POST['Title'];
    $videoId = $_POST['videoId'];
    $adminId = $_POST['adminId'];

    if($Title == null )
    {
      $msg = "Required fields.";
        $msgEncoded = base64_encode($msg);
        header("location:../feed/feed-main.php?msg=".$msgEncoded);
    } else {
      $sql = "INSERT INTO Feed (category,description,Title,videoId,adminId,image)
      VALUES ( '$category','$description','$Title','$videoId','$adminId', '$final_file')";
      if ($conn->query($sql) === TRUE) {
        //$message = "New record created successfully";
        header("location:../feed/feed-main.php");
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