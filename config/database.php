<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$dbname = "sliit";
$conn=mysqli_connect($url,$username,$password, $dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>
