<?php
include_once "head.txt";
include_once "nav.txt";
include_once "connection.php";
$id=$_GET['cp'];
?>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/17.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
<div align='left'>
<form action='confirm_update_password.php' method='POST'>
<fieldset>
<legend>Update Password:</legend>
Username:<br>
<input type='text' name='user' size='40' required>
<br>
<br>
New Password:<br>
<input type='password' name='pass' size='40' required>
<br>
<br>
Comform Password:<br>
<input type='password' name='cpass' size='40' required>
<br>
<input type='hidden' name='id' value='<?php echo $id; ?>' >
<br>
<input type='submit' value='Update Password'>
</fieldset>
</form>

</div>
  <!--
  <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-3"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
-->
    </div>
      </section>

<?php
include_once "foot.txt";
?>