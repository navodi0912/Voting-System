<?php
session_start();
unset($_SESSION["vadmin"]);
unset($_SESSION["vadminname"]);
header("Location:./userlogin.php");
?>