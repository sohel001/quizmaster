<?php
include_once "head.txt";
include_once "nav.txt";
$user=$_SESSION['user'];
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/backgrounds/19.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">

<h2 style='color:blue'><span style='color:white'></span><span style='color: red'><?php echo $user; ?></span> you registered successfully, <a href='http://localhost/quizmaster/index.php' style='color:red'>Click here</a> to go to Home page</h2>";
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