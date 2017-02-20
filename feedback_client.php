<?php
include_once "head.txt";
include_once "nav.txt";
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/20.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
	<br>
	<br>
	<br>
<article align='left'>
<div>
<form action="feedback.php" method="POST">
<fieldset>
<legend>User Feedback</legend>
<h3 color="green">Enter Your Email:</h3>
<input type="email" name="feedback_email" size="50" placeholder="johndoe123@example.com" required>
<br>
<br>
<h3 color="green">Please Enter You Feedback:</h3>
<textarea name="feedback_mssg" rows="10" cols="30"  required placeholder="enter your feedback here!">
</textarea>
<br>
<br>
<input type="submit" name="sub" value="give feedback!">
<br>
<br>
</fieldset>
</form>
</div>
</article>
</div>
      </section>
<?php
include_once "foot.txt";
?>