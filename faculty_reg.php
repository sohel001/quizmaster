<?php
include_once "head.txt";
include_once "connection.php";
include_once "nav.txt";

$name=$_POST['name'];
$qualification=$_POST['qualification'];
$job=$_POST['job'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

$u="SELECT username FROM faculty WHERE username='$username'";
$e="SELECT email FROM faculty WHERE email='$email'";
$re=mysqli_query($con, $e) or die(mysqli_error($con));
$ru=mysqli_query($con, $u) or die(mysqli_error($con));
$num_row_u=mysqli_num_rows($ru);
$num_row_e=mysqli_num_rows($re);
if($num_row_u==0 && $num_row_e==0){
	if($_POST['password'] == $_POST['cpassword']){
	$query="INSERT INTO faculty(name, qualification, current_job_position, mobileno, email, username, password) VALUES('$name', '$qualification', '$job', '$mobileno', '$email', '$username', '$password')";
	$result=mysqli_query($con, $query) or die(mysqli_error($con));
	
	$_SESSION['user']=$_POST['username'];
	header("Location: http://localhost/quizmaster/reg_complete.php");
}
else{
	echo "<form action='faculty_reg.php' method='POST' id='form'>
<fieldset>
<legend>Faculty Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Qualification<span style='color:red'>*</span>:<br>
<input type='text' name='qualification' size='40' required placeholder='Example: M.tech(computer science)'>
<br>
Current Job Position:<br>
<input type='text' name='job' size='40'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40' required>
<br>
Email<span style='color:red'>*</span>:<br>
<input type='email' name='email' size='40' required>
<br>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required placeholder='Example: john007'>
<br>
Password<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
Conform Password<span style='color:red'>*</span>:<br>
<input type='password' name='cpassword' size='40' required>
<br>
<br>
<input type='submit' value='Register'>
</fieldset>
</form><br>";
echo "<span style='color:red'>Error</span>: <span style='color:blue>Password Missmatch</span>";
}
}



if($num_row_e>0 && $num_row_u==0){
	echo "<form action='faculty_reg.php' method='POST' id='form'>
<fieldset>
<legend>Faculty Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Qualification<span style='color:red'>*</span>:<br>
<input type='text' name='qualification' size='40' required placeholder='Example: M.tech(computer science)'>
<br>
Current Job Position:<br>
<input type='text' name='job' size='40'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40' required>
<br>
Email<span style='color:red'>*</span>:<br>
<input type='email' name='email' size='40' required>
<br>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required placeholder='Example: john007'>
<br>
Password<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
Conform Password<span style='color:red'>*</span>:<br>
<input type='password' name='cpassword' size='40' required>
<br>
<br>
<input type='submit' value='Register'>
</fieldset>
</form><br>";
echo "<span style='color:red'>Error</span>: <span style='color:blue> Email already registered, please choose other.</span>";
}

if($num_row_e>0 && $num_row_u>0){
	echo "<form action='faculty_reg.php' method='POST' id='form'>
<fieldset>
<legend>Faculty Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Qualification<span style='color:red'>*</span>:<br>
<input type='text' name='qualification' size='40' required placeholder='Example: M.tech(computer science)'>
<br>
Current Job Position:<br>
<input type='text' name='job' size='40'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40' required>
<br>
Email<span style='color:red'>*</span>:<br>
<input type='email' name='email' size='40' required>
<br>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required placeholder='Example: john007'>
<br>
Password<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
Conform Password<span style='color:red'>*</span>:<br>
<input type='password' name='cpassword' size='40' required>
<br>
<br>
<input type='submit' value='Register'>
</fieldset>
</form><br>";
echo "<span style='color:red'>Error</span>: <span style='color:blue> Email and Username already registered, please choose others.</span>";
}

if($num_row_e==0 && $num_row_u>0){
	echo "<form action='faculty_reg.php' method='POST' id='form'>
<fieldset>
<legend>Faculty Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Qualification<span style='color:red'>*</span>:<br>
<input type='text' name='qualification' size='40' required placeholder='Example: M.tech(computer science)'>
<br>
Current Job Position:<br>
<input type='text' name='job' size='40'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40' required>
<br>
Email<span style='color:red'>*</span>:<br>
<input type='email' name='email' size='40' required>
<br>
Username<span style='color:red'>*</span>:<br>
<input type='text' name='username' size='40' required placeholder='Example: john007'>
<br>
Password<span style='color:red'>*</span>:<br>
<input type='password' name='password' size='40' required>
<br>
Conform Password<span style='color:red'>*</span>:<br>
<input type='password' name='cpassword' size='40' required>
<br>
<br>
<input type='submit' value='Register'>
</fieldset>
</form><br>";
echo "<span style='color:red'>Error</span>: <span style='color:blue> Username already registered, please choose other.</span>";
}

include_once "foot.txt";
?>