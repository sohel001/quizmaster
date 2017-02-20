<?php 
include_once "head.txt";
include_once "nav.txt";
?>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-2" style="background-image: url(assets/images/stock-photo-a-forehead-of-the-brunette-girl-who-is-pondering-about-unsolved-problems-question-marks-are-drawn-311309201-1500x1357-95.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-center">

	<?php
	if(isset($_SESSION['user']) && $_SESSION['user']!=''){
		?>
		                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">Come on Buddy! Go and Explore Yourself</h1>
                        
                    </div>

		
<?php		
	}
	else{
		?>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-center">
                <div class="row"><div class=" col-sm-8 col-sm-offset-2">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">Become Quiz master tody!</h1>
						
                        
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-danger animated fadeInUp delay" href="common_log.php">&nbsp; LOGIN &nbsp; &nbsp;</a> <a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-danger" href="common_reg.php">REGISTER</a></div>
                </div></div>
            </div></div>
			<h2 style='color:red'> Scroll Down to See More!</h2>
        </div>
		<?php
	}
	?>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
     <a class="mbr-arrow__link" href="#features1-3">
    <i class="glyphicon glyphicon-menu-down"></i>
    </a>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="features1-3" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container mbr-section__container--std-top-padding mbr-section__container--sm-bot-padding mbr-section-title container" style="padding-top: 93px;">
        <div class="mbr-header mbr-header--center mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">Welcome To The Game Portal</h3>
                
            </div>
        </div>
    </div>
    <div class="mbr-section__container container">
        <div class="mbr-section__row row">
            <div class="mbr-section__col col-xs-12 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/STUDENT.jpg" class="mbr-figure__img" alt="student.jpg"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">STUDENT PORTAL</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Here the students can play, compete quiz competitions. Go and explore your talent!</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="#" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-danger">START NOW</a></div>
                </div>
            </div>
            <div class="mbr-section__col col-xs-12 col-sm-6">
                <div class="mbr-section__container mbr-section__container--center mbr-section__container--middle">
                    <figure class="mbr-figure"><img src="assets/images/FACULTY2.jpg" class="mbr-figure__img" alt="faculty.jpg"></figure>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-header mbr-header--reduce mbr-header--center mbr-header--wysiwyg">
                        <h3 class="mbr-header__text">FACULTY PORTAL</h3>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--middle">
                    <div class="mbr-article mbr-article--wysiwyg">
                        <p>Here the faculties can upload question for the quiz, with their respective answers. Upload qustion now!</p>
                    </div>
                </div>
                <div class="mbr-section__container mbr-section__container--last" style="padding-bottom: 93px;">
                    <div class="mbr-buttons mbr-buttons--center"><a href="#" class="mbr-buttons__btn btn btn-wrap btn-xs-lg btn-danger">START NOW</a></div>
                </div>
              </div>
            </div>
          </div>
          </section>
    
<?php 
include_once "foot.txt";
?>