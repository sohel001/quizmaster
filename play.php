<?php
session_start();
include_once 'connection.php';
if(isset($_SESSION['login']) && $_SESSION['login']!=''){

$q='SELECT * FROM questions';
$r=mysqli_query($con, $q) or die(mysqli_error($con));
$ques=array();
$ans1=array();
$ans2=array();
$ans3=array();
$correct=array();
$i=0;
while($row=mysqli_fetch_assoc($r)){
	$ques[$i]=$row['qns'];
	$ans1[$i]=$row['ans1'];
	$ans2[$i]=$row['ans2'];
	$ans3[$i]=$row['ans3'];
	$correct[$i]=$row['correct'];
	$i=$i+1;
	
}
	$_SESSION['questions']=$ques;
	$_SESSION['ans1']=$ans1;
	$_SESSION['ans2']=$ans2;
	$_SESSION['ans3']=$ans3;
	$_SESSION['correct']=$correct;
	
header("Location: play_quiz.php");
	
}else{
	header("Location: student_log_client.php");
}
?>
