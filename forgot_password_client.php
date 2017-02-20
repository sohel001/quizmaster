<?php
include_once 'head.txt';
include_once 'nav.txt';
$id=$_GET['cid'];
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/24.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
<div align='left'>
<form action='forgot_password.php' method='POST'>
<fieldset>
<h3 style='color:red'>Resseting Password:</h3>
<span style='color: white'>Full Name :</span>
<br>
<input type='text' name='fullname' size='40'>
<br><br>
<span style='color: white'>Username<span style='color:red'> * </span>:</span>
<br>
<input type='text' name='username' size='40' required>
<br><br>
<span style='color: white'>Email<span style='color:red'> * </span>:</span>
<br>
<input type='email' name='email' size='40' required>
<br>
<input type='hidden' name='cid' value='<?php echo $id; ?>' >
<br>
<input type='submit' value='Submit'>
</fieldset>
</form>

<?php
if(isset($_SESSION['err_forgot_pass']) && $_SESSION['err_forgot_pass']!=''){
	echo "<br>".$_SESSION['err_forgot_pass']."<br>";
	$_SESSION['err_forgot_pass']='';
}
?>
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
