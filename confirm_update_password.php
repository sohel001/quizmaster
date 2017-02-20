<?php
include_once "head.txt";
include_once "nav.txt";
include_once "connection.php";
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/17.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">
<?php
if($_POST['pass']==$_POST['cpass']){
	
if($_POST['id']==0){
	
$qs="UPDATE student set password='$_POST[pass]' WHERE username='$_POST[user]'";
mysqli_query($con, $qs) or die(mysqli_error($con));
echo "<h3><span style='color:red'>".$_POST['user']."</span>, <span style='color:blue'>You have successfully changed your Password. Please <a href='common_log.php' style='color:red'>Click here</a> to log in with new Password</span></h3><br>";

   }
   else if($_POST['id']==1){
	
    $qf="UPDATE faculty set password='$_POST[pass]' WHERE username='$_POST[user]'";
    mysqli_query($con, $qf) or die(mysqli_error($con));
	echo "<h3><span style='color:red'>".$_POST['user']."</span>, <span style='color:blue'>You have successfully changed your Password. Please <a href='common_log.php' style='color:red'>Click here</a> to log in with new Password</span></h3><br>";
  }
 }
?>
  <!--<div class="mbr-arrow mbr-arrow--floating text-center">
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