<?php
session_start();
unset($_SESSION["vuser"]);
unset($_SESSION["vusername"]);
header("Location:./index.php");
?>