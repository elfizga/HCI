<?php include "includes/connect.php"?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Massader</title>
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
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li> 
								<li class="nav-item"><a class="nav-link" href="elements.php">Our Services</a></li>
								<li class="nav-item "><a class="nav-link" href="courses.php">Courses</a></li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
								
								<?php
                                if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) { ?>
									<li class="nav-item "> <a class="nav-link" href="admin.php"> Manage</a></li>
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
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>Company For Technical consultancy and Training Services</h3>
						<P>We Ensure better education for a better world and we Cooperation and establish different training courses that have been delivered in Libya.</P>
						<a class="main_btn" href="#">Get Started</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Finance Area =================-->
        <section class="finance_area">
        	<div class="container">
        		<div class="finance_inner row">
        			<div class="col-lg-4 col-sm-8">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-rocket"></i>
        						</div>
        						<div class="media-body">
									<h5>Precision</h5>
									<p>We are committed to comply with customer as well as statutory and regulatory requirements and to maintain the effectiveness of our Quality Management System.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-8">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-earth"></i>
        						</div>
        						<div class="media-body">
									<h5>Perfection</h5>
									<p>To become a major player in the sector,signing under the prestigious projects for tomorrow’s world of business, harmonizing innovative with its experience ,excellence and high-caliber work.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-8">
        				<div class="finance_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="lnr lnr-tag"></i>
        						</div>
        						<div class="media-body">
									<h5>Perception</h5>
									<p>It has been a founding principle of our company to listen clearly to the end-users, consumers, and understand them and not just guess what they want.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Finance Area =================-->
        
        <!--================Courses Area =================-->
        <section class="courses_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Latest Courses</h2>
        		</div>
        		<div class="row courses_inner">
						<div class="col-lg-12">
								<div class="row gallery-item">
								<?php 
                        $sql = "
                            SELECT 
                            courses.ID AS courseID, courses.name , courses.price , trainer.fullName 
                            FROM courses 
                            INNER JOIN trainer ON courses.trainerID = trainer.ID
							ORDER BY courseID DESC ";
                        global $con;
                        $query = $con->prepare($sql);
                        $query->execute();
                        $results = $query->fetchAll();
                        foreach($results as $result) { ?>
									<div class="col-md-4">
										<a href="img/elements/g8.jpg" class="img-gal">
											<div class="single-gallery-image" style="background: url(img/elements/g8.jpg);">
												<div class="hover_text">
													<a class="cat" href="course-details.php?courseID=<?php echo $result['courseID'];?>"><?php echo $result['price'];?>$</a>
													<a href="course-details.php?courseID=<?php echo $result['courseID'];?>"><h4><?php echo $result['name'];?></h4></a>
													<ul class="list">
													<li><a href="course-details.php?courseID=<?php echo $result['courseID'];?>"><i class="lnr lnr-user"></i> T. <?php echo $result['fullName'];?></a></li></ul>
												</div>
										</div></a>
								  </div>
						<?php } ?>
									</div>
					    	</div>
					</div>
			</div>
		</section>
        <!--================End Courses Area =================-->
        <br><br>
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
        <br><br><br>
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
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>