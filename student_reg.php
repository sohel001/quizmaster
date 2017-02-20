<?php
include_once "head.txt";
include_once "connection.php";
$name=$_POST['name'];
$stream=$_POST['stream'];
$institute=$_POST['institution'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$uname=$_POST['username'];
$pass=$_POST['password'];
$u="SELECT username FROM student WHERE username='$uname'";
$e="SELECT email FROM student WHERE email='$email'";
$urelst=mysqli_query($con, $u) or die(myslqi_error($con));
$erelst=mysqli_query($con, $e) or die(mysqli_error($con));
$num_u=mysqli_num_rows($urelst);
$num_e=mysqli_num_rows($erelst);
if($num_u==0 && $num_e==0)
{
	if($_POST['password']==$_POST['cpassword']){
$query="INSERT INTO student(name, institute, stream, mobileno, email, username, password) VALUES('$name', '$institution', '$stream', '$mobileno', '$email', '$uname', '$pass')";
mysqli_query($con, $query) or die(mysqli_error($con));
session_start();
$_SESSION['user']=$_POST['username'];
header("Location: http://localhost/quizmaster/reg_complete.php");
	}
}
include_once "nav.txt";

if($num_u==0 && $num_e==0){
	if($_POST['password'] != $_POST['cpassword']){
	echo "<form action='student_reg.php' method='POST' id='form'>
<fieldset>
<legend>Student Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Institution Studying<span style='color:red'>*</span>:<br>
<input type='text' name='institution' size='40' required>
<br>
Stream of Study<span style='color:red'>*</span>:<br>
<input type='text' name='stream' size='40' required placeholder='Example: B.tech(computer science)'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40'>
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
echo "<span style='color:red'>Error</span>: <span style='color:blue> Password did not matched</span>";
	}
}
if($num_u>0 && $num_e==0){
	echo "<form action='student_reg.php' method='POST' id='form'>
<fieldset>
<legend>Student Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Institution Studying<span style='color:red'>*</span>:<br>
<input type='text' name='institution' size='40' required>
<br>
Stream of Study<span style='color:red'>*</span>:<br>
<input type='text' name='stream' size='40' required placeholder='Example: B.tech(computer science)'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40'>
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
echo "<span style='color:red'>Error</span>: <span style='color:blue> Username already Exists, Please choose other</span>";	
}
else if($num_u==0 && $num_e>0){
	echo "<form action='student_reg.php' method='POST' id='form'>
<fieldset>
<legend>Student Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Institution Studying<span style='color:red'>*</span>:<br>
<input type='text' name='institution' size='40' required>
<br>
Stream of Study<span style='color:red'>*</span>:<br>
<input type='text' name='stream' size='40' required placeholder='Example: B.tech(computer science)'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40'>
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
echo "<span style='color:red'>Error</span>: <span style='color:blue> Email id already registered, Please choose other</span>";
}
else if($num_u>0 && $num_e>0){
	echo "<form action='student_reg.php' method='POST' id='form'>
<fieldset>
<legend>Student Registration:</legend>
Name<span style='color:red'>*</span>:<br>
<input type='text' name='name' size='40' required>
<br>
Institution Studying<span style='color:red'>*</span>:<br>
<input type='text' name='institution' size='40' required>
<br>
Stream of Study<span style='color:red'>*</span>:<br>
<input type='text' name='stream' size='40' required placeholder='Example: B.tech(computer science)'>
<br>
Mobile No:<br>
<input type='text' name='mobileno' size='40'>
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
echo "<span style='color:red'>Error</span>: <span style='color:blue> Username and Email id already registered, Please choose others</span>";
}


?>