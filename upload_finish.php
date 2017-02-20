<?php
include_once "head.txt";
include_once "nav.txt";
include_once "connection.php";
$query="SELECT * FROM questions WHERE username='$_SESSION[login]'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($result);
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/20.jpg);">
   <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
   <div align='left'>
    <h2 style='color:blue'>You Uploaded <span style='color:red'><?php echo $num_rows; ?></span> Questions, <a style='color:red' href='upload_client.php'>Click here</a> to Upload More!</h2>   
   </div>
   </div>
</section>

<?php
	include_once "foot.txt";
	?>