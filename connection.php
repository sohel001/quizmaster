<?php
$server="localhost";
$user="root";
$password="";

$con=mysqli_connect($server, $user, $password);
if(!$con){
	die(mysqli_error($con));
}
mysqli_select_db($con, "quizmaster") or die(mysqli_error($con));
?>