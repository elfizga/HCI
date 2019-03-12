<?php include "includes/connect.php"?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Courses</title>
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
								<li class="nav-item"><a class="nav-link" href="elements.php">Our Services</a></li>
								<li class="nav-item active"><a class="nav-link" href="courses.php">Courses</a></li>
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
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Courses</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="about-us.html">Courses</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Courses Area =================-->
        <section class="courses_area p_120">
        	<div class="container">
				
        		<div class="main_title">
        			<h2> Our Courses</h2>
				</div>
				<div>
					<aside class="single_sidebar_widget search_widget">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search Courses ..">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
							</span>
						</div>
						<div class="br"></div>
					</aside> <br>
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
        <!--================ start footer Area  =================-->	
        <?php include 'includes/footer.php'; ?>
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