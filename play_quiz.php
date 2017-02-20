<?php
session_start();
include_once 'connection.php';
label:
$ap=array_rand($_SESSION['questions'], 1);
$qc="SELECT no FROM tab WHERE no='$ap'";
$rc=mysqli_query($con, $qc);
$nn=mysqli_num_rows($rc);
if($nn>0){
	goto label;
}else{
$is="INSERT INTO tab(no) VALUES('$ap')";
mysqli_query($con, $is);
}
$j=$_SESSION['i'];
$ar=array(1=>'a', 2=>'b', 3=>'c', 4=>'d');
$c=array_rand($ar, 1);
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.11.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
	<title>Play Quiz competition</title>  
  </head>
  <body>
  <br><br>
  <br>
   <div style='font-weight: bold' id='quiz-time-left'></div>
   	<script type='text/javascript'>
    var total_seconds=60*1;
	var c_minutes=parseInt(total_seconds/60);
	var c_seconds=parseInt(total_seconds%60);
	function CheckTime(){
		document.getElementById("quiz-time-left").innerHTML='Time Left: '+c_minutes+' minutes '+c_seconds+' seconds';
		if(total_seconds <=0){
			setTimeout('document.quiz.submit()', 1);
			}else{
				total_seconds=total_seconds-1;
				c_minutes=parseInt(total_seconds/60);
	            c_seconds=parseInt(total_seconds%60);
	            setTimeout("CheckTime()", 1000);
	}}
	setTimeout("CheckTime()", 1000);
	</script>
   <br><br>
  <?php
  if($c==1){
	  ?>
  <form action='evaluate.php' method='POST' name='quiz'>
  <fieldset>
  <legend style='color:red'>Plyaning The Game!</legend>
  Q<?php echo "<small>".($j+1)."</small>)"." ".$_SESSION['questions'][$ap]; ?>
  <input type='hidden' name='question' value='<?php echo $_SESSION['questions'][$ap]; ?>'>
  <br><br>
	<input type='radio' name='ans' value='<?php echo $_SESSION['ans1'][$ap]; ?>'> <?php echo $_SESSION['ans1'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans2'][$ap]; ?>'> <?php echo $_SESSION['ans2'][$ap]; ?>   <input type='radio' name='ans' value='<?php echo $_SESSION['ans3'][$ap]; ?>'> <?php echo $_SESSION['ans3'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['correct'][$ap]; ?>'> <?php echo $_SESSION['correct'][$ap]; ?>
	<br>
	<br>
	<input type='submit' value='Submit and Proceed Next'>
	</fieldset>
	</form>
	<?php
  }elseif($c==2){
	  ?>
	    <form action='evaluate.php' method='POST' name='quiz'>
  <fieldset>
  <legend style='color:red'>Plyaning The Game!</legend>
  Q<?php echo "<small>".($j+1)."</small>)"." ".$_SESSION['questions'][$ap]; ?>
  <input type='hidden' name='question' value='<?php echo $_SESSION['questions'][$ap]; ?>'>
  <br><br>
	<input type='radio' name='ans' value='<?php echo $_SESSION['correct'][$ap]; ?>'> <?php echo $_SESSION['correct'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans2'][$ap]; ?>'> <?php echo $_SESSION['ans2'][$ap]; ?>   <input type='radio' name='ans' value='<?php echo $_SESSION['ans3'][$ap]; ?>'> <?php echo $_SESSION['ans3'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans1'][$ap]; ?>'> <?php echo $_SESSION['ans1'][$ap]; ?>
	<br>
	<br>
	<input type='submit' value='Submit and Proceed Next'>
	</fieldset>
	</form>
	<?php
	}elseif($c==3){
		?>
		  <form action='evaluate.php' method='POST' name='quiz'>
  <fieldset>
  <legend style='color:red'>Plyaning The Game!</legend>
  Q<?php echo "<small>".($j+1)."</small>)"." ".$_SESSION['questions'][$ap]; ?>
  <input type='hidden' name='question' value='<?php echo $_SESSION['questions'][$ap]; ?>'>
  <br><br>
	<input type='radio' name='ans' value='<?php echo $_SESSION['ans1'][$ap]; ?>'> <?php echo $_SESSION['ans1'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['correct'][$ap]; ?>'> <?php echo $_SESSION['correct'][$ap]; ?>   <input type='radio' name='ans' value='<?php echo $_SESSION['ans3'][$ap]; ?>'> <?php echo $_SESSION['ans3'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans2'][$ap]; ?>'> <?php echo $_SESSION['ans2'][$ap]; ?>
	<br>
	<br>
	<input type='submit' value='Submit and Proceed Next'>
	</fieldset>
	</form>
	<?php
	}else{
		?>
		  <form action='evaluate.php' method='POST' name='quiz'>
  <fieldset>
  <legend style='color:red'>Plyaning The Game!</legend>
  Q<?php echo "<small>".($j+1)."</small>)"." ".$_SESSION['questions'][$ap]; ?>
  <input type='hidden' name='question' value='<?php echo $_SESSION['questions'][$ap]; ?>'>
  <br><br>
	<input type='radio' name='ans' value='<?php echo $_SESSION['ans1'][$ap]; ?>' > <?php echo $_SESSION['ans1'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans2'][$ap]; ?>'> <?php echo $_SESSION['ans2'][$ap]; ?>   <input type='radio' name='ans' value='<?php echo $_SESSION['correct'][$ap]; ?>'> <?php echo $_SESSION['correct'][$ap]; ?> <input type='radio' name='ans' value='<?php echo $_SESSION['ans3'][$ap]; ?>'> <?php echo $_SESSION['ans3'][$ap]; ?>
	<br>
	<br>
	<input type='submit' value='Submit and Proceed Next'>
	</fieldset>
	</form>
	<?php
	}
	?>
	<br><br>
	<form action='finish_play.php' method='POST'>
	<input type='submit' value='Stop Playing'>
	</form>
	

	</body>
	</html>
	
  