<?php include "includes/connect.php"?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>our services</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
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
								<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li> 
								<li class="nav-item active"><a class="nav-link" href="elements.php">Our Services</a></li>
								<li class="nav-item"><a class="nav-link" href="courses.php">Courses</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
								<?php if(is_null($_SESSION['userid']) && $_SESSION['userid'] > 0) { 
								'<li class="nav-item"> <a class="nav-link" href="login_admin.php"><i class="lnr lnr-enter" id ="enter"></i></a></li>'
								} ?>
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
						<h2>Our Services</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="elements.html">our services</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
		<section class="about_area p_120">
				<div class="container">
						<div class="row about_inner">
								<div class="col-lg-12">
										<div class="main_title">
												<h2 style= " font-size: 50px;">our main goal is to serve you</h2>
												<p></p>Our dedicated team of HR professional, sources, screens and evaluates the potential candidates for the client’s in various of positions required. We endeavor to understand the organization values, work environment, job requirements and expectations, to place the best possible match</p>
											</div>

									</div>
								</div>
									<div class="row about_inner">
									<div class="col-lg-12">
											<div class="main_title">
													<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services:</h2>
													<p>is applying a high standard of technological Educational Development in training and consultancy programs: Massader /ITCS which are licensed to provide Training and Certification courses endorsed by ICorr (The institute of Corrosion, SSPC: The Society for Protective Coatings (SSPC) and LIoyd’s Registration in Egypt, Africa, Libya, and Middle East).</p>
												</div>
	
										</div>
									</div>
										<div class="row about_inner">
										<div class="col-lg-12">
												<div class="main_title">
														<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services / BAKER TILLY:</h2>
														<p>are licensed to provide Consulting, Training and Certification programs: obtained from the Institute of Internal Auditors (IIA): is the internal audit profession’s most widely recognized advocates, educators, and provider of standards, guidance: International Financial Reporting Standards (IFRS), Certified Public Account (CPA), Certified Internal Auditing (CIA), and Certified Management Account (CMA).

															</p>
													</div>
		
											</div>
									</div>
									<div class="row about_inner">
											<div class="col-lg-12">
													<div class="main_title">
															<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services</h2>
															<p>has a dedicated team of HR professional, sources, screens and evaluates the potential candidates for the client’s in various of positions required. We endeavor to understand the organization values, work environment, job requirements and expectations, to place the best possible match. Moreover, it contracts with suitable recruitment agencies to provide engineers, advisers, technicians, English language inspectors. It also signs MOU with a variety of agencies that have a respectable reputation in the in various places.</p>
														</div>
			
												</div>
									</div>
									<div class="row about_inner">
												<div class="col-lg-12">
														<div class="main_title">
																<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services / International Oil Filed:</h2>
																<p>are dealing with high creditability and well known organization that provides Consulting, Training and Certification Services in oil and gas fields endorsed by Datalog Oil Services DMCC: provides SLS Mud Logging /Core Analysis /Rock mechanics /Sedimentology /Reservoir Geology /and Reservoir Modeling.</p>
															</div>
				
													</div>
											</div>
											<div class="row about_inner">
													<div class="col-lg-12">
															<div class="main_title">
																	<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services:</h2>
																	<p>provides programs that are endorsed by American Petroleum Institute (API) to qualified engineers and technicians as a qualified instructors and inspectors in different aspects: The standard of API’s (API 650,510,570, RP 571, RP 572, RP 576, RP 577, ASME IX, ASME V, ASME VIII). Also, the examination will be held in an approved licensed centers.</p>
																</div>
					
														</div>
											</div>
											<div class="row about_inner">
														<div class="col-lg-12">
																<div class="main_title">
																		<h2 style= "color:#4dbf1c; font-size: 20px;">Massader for Technical consultancy and Training Services/ AMBARA/</h2>
																		<p>Plane Trading for Aircraft Cooperate to supply training in airplane and have created a solution, FleetSmart, that goes beyond the concept of right-sizing aircraft, by optimizing every aspect of the business. Based on 3 performance pillars – Design Smart, Experience Smart and Business Smart.

																			</p>
																	</div>
						
															</div>
													</div>

						
					
						</div>
					</section>
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
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>