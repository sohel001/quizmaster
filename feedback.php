<?php
include_once "head.txt";
include_once "nav.txt";
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/19.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
<?php
include_once "connection.php";
$query="INSERT INTO feedback(email, messg) VALUES('$_POST[feedback_email]', '$_POST[feedback_mssg]')";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "<h2 style='color:blue'>Thank You for your valuable feedback!!, We will be very glad to help you.</h2>"."<br>";
?>
</div>
</section>
<?php
include_once "foot.txt";
?>