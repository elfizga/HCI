<?php include "includes/connect.php"?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>About Us</title>
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
        <header class="header_area" id="header_area">
				<div class="main_menu ">
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
								<li class="nav-item active"><a class="nav-link" href="about-us.php">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="elements.php">Our Services</a></li>
								<li class="nav-item "><a class="nav-link" href="courses.php">Courses</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
								<?php
                                if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) { ?>
									<li class="nav-item "> <a class="nav-link" href="admin.php">Manage</a></li>
									<li class="nav-item"> <a class="nav-link" href="logout.php"><i class="lnr lnr-exit" id ="enter"></i></a></li>
								 <?php
                    } else { ?>
								<li class="nav-item"> <a class="nav-link" href="login_admin.php"><i class="lnr lnr-enter" id ="enter"></i></a></li>
								 </ul>
								 <?php 
                                        }
                                    ?>
								
						</div> 
					</div>
            	</nav>
            </div>
        </header>
			<!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area stricky">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About Us</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="about-us.html">About Us</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================About Area =================-->
        <section class="about_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Goals to Achieve for the leadership</h2>
        			<p>Our dedicated team of HR professional, sources, screens and evaluates the potential candidates for the client’s in various of positions required.</p>
        		</div>
        		<div class="row about_inner">
        			<div class="col-lg-6">
						<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" id="headingOne">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										MISSION
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
										To meet the needs of the different markets or sectors where we participate in Libya and other countries such as Egypt by offering products, services and solutions through our operative partners and joint venture businesses.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										VISION
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
										Our vision is to build a foundation for growth and operational excellence. To reach a high acknowledgement from leading organizations in Libya and other countries, as the principal representative of products and services within the Energy, Construction, Communications, Industrial and Training sectors.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										OBJECTIVES
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
										We identify what businesses need to do to be successful in Libya and other and countries are committed to assisting our partners for the success of our joint and business ventures.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingfour">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
										STRENGTH
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
									<div class="card-body">
										Our Strength as follows :<br>
										1.Professionally Qualified and experienced Management Team<br>
										2.Qualified and experienced Administrative and Project staff<br>
										3.Strong team of Skilled workforce<br>
										4.One aim, one target<br>
										5.Result-oriented approach<br>
										6.Friendly, but professional relationship <br>
									</div>
								</div>
							</div>
						</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="video_area" id="video">
							<img class="img-fluid" src="img/office.jpg" alt="" >
						
						</div>
        			</div>
        		</div>
        		<div class="about_details">
        			<p>ur HR Consultants thoroughly assess the needs of our Clients and Candidates to ensure a complete understanding of the requirements of all stakeholders. We manage the full recruitment cycle, consequently covering the full process of employment. Our recruitment approach is to ensure placed the most qualified candidate “The Best Personnel For The Right Job“ Our services does not end in the recruitment and placement of candidates, we conduct retention session to the Client’s and Candidates as part of our Service Level Agreements.
						<p>Massader for Technical consultancy and Training Services: is applying a high standard of technological Educational Development in training and consultancy programs: Massader /ITCS which are licensed to provide Training and Certification courses endorsed by ICorr (The institute of Corrosion, SSPC: The Society for Protective Coatings (SSPC) and LIoyd’s Registration in Egypt, Africa, Libya, and Middle East).</p>
					</p>
        		</div>
        	</div>
        </section>
        <!--================End About Area =================-->
        
        <!--================Team Area =================-->
        <section class="team_area p_120">
			<div class="container">
				<div class="main_title">
					<h2>Meet Our Team</h2>
				</div>
				<div class="row team_inner">
					<div class="col-lg-2 col-sm-8">
						<div class="team_item">
							<div class="team_img">
								<img class="rounded-circle" src="img/Mabruk.jpg" alt="">
								<div class="hover">
									<p>Managing Director</p>
								</div>
							</div>
							<div class="team_name">
								<h4>Mabrouk</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-8">
						<div class="team_item">
							<div class="team_img">
								<img class="rounded-circle" src="img/walid1.jpg" alt="">
								<div class="hover">
									<p>Technical Support Manager</p>
								</div>
							</div>
							<div class="team_name">
								<h4>Walid</h4>	
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-8">
						<div class="team_item">
							<div class="team_img">
								<img class="rounded-circle" src="img/team4.jpg" alt="">
								<div class="hover">
									<p>Marketing Manager</p>
								</div>
							</div>
							<div class="team_name">
								<h4>Ahmed</h4>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-sm-8">
						<div class="team_item">
							<div class="team_img">
								<img class="rounded-circle" src="img/team/team-4.jpg" alt="">
								<div class="hover">
									<p>Deputy Director</p>
								</div>
							</div>
							<div class="team_name">
								<h4>Rima</h4>
							</div>
						</div>
					</div>
				
				<div class="col-lg-2 col-sm-8">
					<div class="team_item">
						<div class="team_img">
							<img class="rounded-circle" src="img/team6.jpg" alt="">
							<div class="hover">
								<p>Asia executive Manager</p>
							</div>
						</div>
						<div class="team_name">
							<h4>Motokura</h4>	
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-sm-8">
					<div class="team_item">
						<div class="team_img">
							<img class="rounded-circle" src="img/team5.jpg" alt="">
							<div class="hover">
								<p>Executive Manager</p>
							</div>
						</div>
						<div class="team_name">
							<h4>Omar</h4>
						</div>
					</div>
				</div>
			</div>			
		</section>
        <!--================End Team Area =================-->
        
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