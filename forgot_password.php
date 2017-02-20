<?php
include_once "head.txt";
include_once "nav.txt";
include_once "connection.php";

$username=$_POST['username'];
$email=$_POST['email'];
$id=$_POST['cid'];

$st="SELECT email, username FROM student WHERE username='$username' AND email='$email'";
$ft="SELECT email, username FROM faculty WHERE username='$username' AND email='$email'";

$rst=mysqli_query($con, $st) or die(mysqli_error($con));
$rft=mysqli_query($con, $ft) or die(mysqli_error($con));

$num_st=mysqli_num_rows($rst);

$num_ft=mysqli_num_rows($rft);

switch($id){
	case 0:
	if($num_st==0){
	$_SESSION['err_forgot_pass']="<strong style='color:red'>ERROR:</strong><span style='color:white'>  Incorrect Details, please enter registered Username & Password.</span><br>";
    header("Location: forgot_password_client.php");
    }
    else{
	header("Location: update_password.php?cp=0");
	}
	break;
	case 1:
	if($num_ft==0){
	$_SESSION['err_forgot_pass']="<strong style='color:red'>ERROR:</strong><span style='color:white'>  Incorrect Details, please enter registered Username & Password.</span><br>";
    header("Location: forgot_password_client.php");
    }
    else{
	header("Location: update_password.php?cp=1");
	}
	break;
	}
?>
<?php
include_once "foot.txt";
?>