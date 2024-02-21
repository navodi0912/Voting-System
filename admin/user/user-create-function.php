<?php
include_once '../config/database.php';

$file = "images"."-".rand(1000,100000)."-".$_FILES['file']['name'];
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
    header("location:../user/user-main.php?msg=".$msgEncoded);
} else {
  $sql = "INSERT INTO User (first_name,last_name,phoneNumber,gender,address,DOB, email, password, image)
  VALUES ( '$first_name','$last_name','$phoneNumber','$gender','$address','$DOB', '$email', '$hash', '$final_file')";
  if ($conn->query($sql) === TRUE) {
    //$message = "New record created successfully";
    header("location:../user/user-main.php");
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