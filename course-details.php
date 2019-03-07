<?php include "includes/connect.php"?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Course Details</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
				<div class="main_menu">
					<nav class="navbar navbar-expand-lg navbar-light">
						<div class="container">
							<!-- Brand and toggle get grouped for better mobile display -->
							<a class="navbar-brand" href="index.html"><p><b style="color:#4dbf1c">MASSADER</b></p></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav ml-auto">
									<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
									<li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> 
									<li class="nav-item"><a class="nav-link" href="elements.html">Our Services</a></li>
									<li class="nav-item"><a class="nav-link" href="courses.html">Courses</a></li>
									<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
								</ul>
							</div> 
						</div>
					</nav>
				</div>
			</header>
			<!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Course Details</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="courses.html">Course</a>
							<a href="course-details.html">Course Details</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Course Details Area =================-->
        <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-8">
        				<div class="c_details_img">
        					<img class="img-fluid" src="img/courses/course-details.jpg" alt="">
						</div>
						<br> <h2>Course Title</h2> <br>
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Objectives</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" id="comments-tab" data-toggle="tab" href="#comments" role="tab" aria-controls="comments" aria-selected="false">More Info</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="objctive_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="objctive_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
								</div>
							</div>
							<div class="tab-pane fade show active" id="comments" role="tabpanel" aria-labelledby="comments-tab">
								<div class="comments-area">
									<div class="c_details_list">
											<ul class="list">
												<li><a href="#">Trainer’s Name <span>George Mathews</span></a></li>
												<li><a href="#">Course Fee <span> $230 </span></a></li>
												<li><a href="#">Deuration <span> 3 months</span></a></li>
												<li><a href="#">Schedule <span>2.00 pm to 4.00 pm</span></a></li>
											</ul>
									</div>		                                             				
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="c_details_list">
							<h2 style="text-align:center;">Enroll the Course</h2>
        					<form>
								<div class="mt-10">
									<input type="text" name="company_name" placeholder="Company Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Company Name'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="dep_name" placeholder="Department Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Department Name'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="email" name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
								</div>	
								<div class="mt-10">
									<input type="text" name="trainees" placeholder=" Number of trainees" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Number of trainees'" required class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" required class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
								</div>
								<br>
							</form>
        					<a class="main_btn" href="#">Enroll Now</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Course Details Area =================-->
        
        <!--================ start footer Area  =================-->	
		<?php
	   include 'includes/footer.php';
	   ?>
		<!--================ End footer Area  =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>