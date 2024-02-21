<?php
include_once '../config/database.php';

$id = $_GET['id'];

$sql = "DELETE FROM Feedback WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:../feedback/feedback-main.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>