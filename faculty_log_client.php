<?php
include_once "head.txt";
include_once "nav.txt";
?>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/2.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">

<div align='left'>
<form action='faculty_log.php' method='POST'>
<fieldset>
<h2 style='color:red'>Please Login to continue:</h2>
<strong style='color:white'>Username</strong><span style='color:red'>*</span><span style='color:white'>:</span><br>
<input type='text' name='username' size='40' required>
<br>
<br>
<strong style='color:white'>Password</strong><span style='color:red'>*</span><span style='color:white'>:</span><br>
<input type='password' name='password' size='40' required>
<br>
<br>
<input type='submit' value='Login'>
</fieldset>
</form>
<?php
if(isset($_SESSION['err_log']) && $_SESSION['err_log']!='')
{
	echo "<br>".$_SESSION['err_log']."<br>";
	$_SESSION['err_log']='';
}
?>
<br>
<strong><a href='forgot_password_client.php?cid=1'  style='color:white; text-decoration: none;'>Forgot Password?</a></strong>
</div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-3"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>

    </div>
      </section>







<?php
include_once "foot.txt";
?>
