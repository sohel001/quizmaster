<?php
include_once 'connection.php';
session_start();

$qa="SELECT qns, correct FROM questions WHERE qns='$_POST[question]' AND correct='$_POST[ans]'";
$qr=mysqli_query($con, $qa) or die(mysqli_error($con));
$correct_ans=mysqli_num_rows($qr);

if($correct_ans>0){
	++$_SESSION['corrects'];
}
++$_SESSION['i'];
switch($_SESSION['i']){
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
            header("Location: play_quiz.php");
			break;
	case 10:
	        $_SESSION['i']=0;
			header("Location: finish_play.php");
			break;
			
}



?>