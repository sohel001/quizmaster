<?php
include_once "head.txt";
include_once "nav.txt";
include_once "connection.php";
$query="SELECT username, password FROM faculty WHERE username='$_POST[username]' AND password='$_POST[password]'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num=mysqli_num_rows($result);
if($num>0){
	$_SESSION['user']=$_POST['username'];
	header("Location: http://localhost/quizmaster/index.php");
}
else{
	/*echo "<form action='faculty_login.php' method='POST'>
<fieldset>
<legend>Please Login to continue</legend>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required>
<br>
Password<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
<input type='submit' value='Login'>
</fieldset>
</form><br>";
echo "<span style='color:red'>Error:</span><span style='color:blue'>Incorrect username, password</span><br>";
*/
$_SESSION['err_log']="<strong style='color:red'>ERROR:</strong><span style='color:white'>  Incorrect username & password, please enter correct details.</span><br>";
header("Location: http://localhost/quizmaster/faculty_log_client.php");
}

include_once "foot.txt";
?>