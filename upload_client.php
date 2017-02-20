<?php
include_once "head.txt";
include_once "nav.txt";
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/20.jpg);">
   <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
	<?php
	if(isset($_SESSION['login']) && $_SESSION['login']!=''){
	?>
	<div align='left'>
	
	<form action='upload.php' method='POST'>
	<fieldset>
	<legend>Please Upload Your Questions:</legend>
	<span style='color:red'>Note:</span><small> Please checked the correct answer!</small><br><br>
	<strong>Q.</strong><input type='text' name='question' size='100' required><br><br><br>
	<input type='radio' name='ans' value='a' checked='checked'> A<input type='text' name='ans1' size='10' required> <input type='radio' name='ans' value='b'> B<input type='text' name='ans2' size='10' required>   <input type='radio' name='ans' value='c'> C<input type='text' name='ans3' size='10' required> <input type='radio' name='ans' value='d'> D<input type='text' name='ans4' size='10' required>
 <br><br><br>
 <input type='submit' value='Upload and Proceed to Next'>
 </fieldset>
 </form>
 <br><br>
 
<form action='upload_finish.php' method='POST'>
<input type='submit' value='Finish Upload'>
</form>
</div>
<?php
	}else{
		header("Location: faculty_log_client.php");
	}
	?>
    </div>
</section>
	
	<?php
	include_once "foot.txt";
	?>