<?php
include_once "head.txt";
include_once "nav.txt";
?>
<link href="assets/animate.css/styling.css" rel="stylesheet" type="text/css">

</section><section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/23.png);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
	<div align='left'>
<form action="faculty_reg.php" method="POST" id="form">
<fieldset>
<legend>Faculty Registration:</legend>
Name<span style="color:red">*</span>:<br>
<input type="text" name="name" size="40" required>
<br>
Qualification<span style="color:red">*</span>:<br>
<input type="text" name="qualification" size="40" required placeholder="Example: M.tech(computer science)">
<br>
Current Job Position:<br>
<input type="text" name="job" size="40">
<br>
Mobile No:<br>
<input type="text" name="mobileno" size="40" required>
<br>
Email<span style="color:red">*</span>:<br>
<input type="email" name="email" size="40" required>
<br>
Username<span style="color:red">*</span>:<br>
<input type="text" name="username" size="40" required placeholder="Example: john007">
<br>
Password<span style="color:red">*</span>:<br>
<input type="password" name="password" size="40" required>
<br>
Conform Password<span style="color:red">*</span>:<br>
<input type="password" name="cpassword" size="40" required>
<br>
<br>
<input type="submit" value="Register">
</fieldset>
</form>
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