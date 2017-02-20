<?php
session_start();
include_once "connection.php";
$qq="DELETE FROM tab";
mysqli_query($con, $qq);
$q="SELECT * FROM results WHERE username='$_SESSION[login]'";
$r=mysqli_query($con, $q);
$no_of_test=0;
$best=0;
while($row=mysqli_fetch_assoc($r)){
$no_of_test=$row['no_of_test'];
$best=$row['best'];
$percentage=$row['percentage'];
}

if($best<=$_SESSION['corrects']){
	$best=$_SESSION['corrects'];
}else{
	$best=$_SESSION['corrects'];
}
++$no_of_test;
$percentage=$best*10;
$qs="INSERT INTO results(username, no_of_test, best, percentage) VALUES('$_SESSION[login]', '$no_of_test', '$best', '$percentage')";
mysqli_query($con, $qs) or die(mysqli_error($con));
header("Location: scores.php");

?>