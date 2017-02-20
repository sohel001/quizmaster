<?php
session_start();
include_once "connection.php";
$q=$_POST['question'];
$ans=$_POST['ans'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];

if($ans=='a'){
	$query="INSERT INTO questions(qns, username, ans1, ans2, ans3, correct) VALUES('$q', '$_SESSION[login]', '$ans2', '$ans3', '$ans4', '$ans1')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	header("Location: http://localhost/quizmaster/upload_client.php");
}
else if($ans=='b'){
		$query="INSERT INTO questions(qns, username, ans1, ans2, ans3, correct) VALUES('$q', '$_SESSION[login]', '$ans1', '$ans3', '$ans4', '$ans2')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	header("Location: http://localhost/quizmaster/upload_client.php");
}
else if($ans=='c'){
		$query="INSERT INTO questions(qns, username, ans1, ans2, ans3, correct) VALUES('$q', '$_SESSION[login]', '$ans1', '$ans2', '$ans4', '$ans3')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	header("Location: http://localhost/quizmaster/upload_client.php");
}
else if($ans=='d'){
		$query="INSERT INTO questions(qns, username, ans1, ans2, ans3, correct) VALUES('$q', '$_SESSION[login]', '$ans1', '$ans2', '$ans3', '$ans4')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	header("Location: http://localhost/quizmaster/upload_client.php");
}


?>