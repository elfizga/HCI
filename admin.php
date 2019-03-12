


<?php include "includes/connect.php";
if (isset($_SESSION['userid'])) {
  $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
  
?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Administrator

    </title>

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

    <link href="css/sweetalert2.min.css" rel="stylesheet" />

  </head>

  <body>

    <!--================Header Menu Area =================-->

    <header class="header_area" id="header_area">

      <div class="main_menu">

        <nav class="navbar navbar-expand-lg navbar-light">

          <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->

            <a class="navbar-brand" href="index.html">

              <p>

                <b style="color:#4dbf1c">MASSADER

                </b>

              </p>

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

              <span class="icon-bar">

              </span>

              <span class="icon-bar">

              </span>

              <span class="icon-bar">

              </span>

            </button>

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

              <ul class="nav navbar-nav menu_nav ml-auto">

                <li class="nav-item ">

                  <a class="nav-link" href="index.php">Home

                  </a>

                </li> 

                <li class="nav-item">

                  <a class="nav-link" href="about-us.php">About Us

                  </a>

                </li> 

                <li class="nav-item">

                  <a class="nav-link" href="elements.php">Our Services

                  </a>

                </li>

                <li class="nav-item ">

                  <a class="nav-link" href="courses.php">Courses

                  </a>

                </li>

                <li class="nav-item">

                  <a class="nav-link" href="contact.php">Contact Us

                  </a>

                </li>

                <?php

if(isset($_SESSION['userid']) && $_SESSION['userid'] > 0) { ?>

                <li class="nav-item "> 

                  <a class="nav-link" href="admin.php"> Manage

                  </a>

                </li>

                <li class="nav-item"> 

                  <a class="nav-link" href="logout.php">

                    <i class="lnr lnr-exit" id ="enter">

                    </i>

                  </a>

                </li>

                <?php

} else { ?>

                <li class="nav-item"> 

                  <a class="nav-link" href="login_admin.php">

                    <i class="lnr lnr-enter" id ="enter">

                    </i>

                  </a>

                </li>

              </ul>

              <?php 

}

?>

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

      <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="">

      </div>

      <div class="container">

        <div class="banner_content text-center">

          <h2>manage courses

          </h2>

          <div class="page_link">

            <a href="index.html">Home

            </a>

            <a href="admin.html">Administrator

            </a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!--================End Home Banner Area =================-->

  <!--================start manage Area =================-->

  <section class="about_area p_120">

    <div class="container">

      <div class="main_title">

        <h2> Manage All Courses

        </h2>

      </div>

      <div>

        <table class="table">

          <thead class="thead-dark">

            <tr>

              <th scope="col"># ID

              </th>

              <th scope="col">Title

              </th>

              <th scope="col">Trainer

              </th>

              <th scope="col">Price

              </th>

              <th scope="col">Duration

              </th>

              <th scope="col">Start Date

              </th>

              <th scope="col">Delete

              </th>

            </tr>

          </thead>

          <tbody>

            <?php 

$sql = "
SELECT 
courses.* , trainer.fullName 

FROM courses 
INNER JOIN trainer ON courses.trainerID = trainer.ID ";

global $con;

$query = $con->prepare($sql);

$query->execute();

$items = $query->fetchAll();

if (! empty($items)) {

?>

            <?php

foreach($items as $item) {

echo '<tr>';

echo '<th scope="row">'. $item['ID'] .'</th>';

echo '<td>'. $item['name'] .'</td>';

echo '<td>'. $item['fullName'] .'</td>';

echo '<td>'. $item['price'] .'</td>';

echo '<td>'. $item['duration'] .'</td>';

echo '<td>'. $item['startDate'] .'</td>';

echo "<td><button type='button' class='delrequest btn btn-link btn-sm' data-id='". $item['ID'] ."'> <i class='lnr lnr-cross-circle' id='iconx'></i> </button> </td>";

echo '</tr>';

}
?>
<?php }} ?>
          </tbody>

        </table>

      </div>

    </div>

    

  </section>
  
  <div class="asideButton">

    <button type="button" class="btn btn-light" style="color:green; background-color:white;" 

            data-toggle="modal" data-target="#AddModal" >Add Course

    </button>

  </div> 

  <!--================end manage Area =================-->

  <!--================add modal Area =================-->
 

  <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="AddCourse" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">
      
         

          <h5 class="modal-title" id="AddCourse">Add new course

          </h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;

            </span>

          </button>

        </div>

        <div class="modal-body">

          <form id="addForm" action="addCourse.php" method="post" >

            <div class="row">

              <div class="col-xl-6 col-lg-6">

                <div class="form-group">

                  <label for="title">Title

                  </label>

                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter Course Title" required="">

                </div>

              </div>

              <div class="col-xl-6 col-lg-6">

                <div class="form-group">

                  <label for="price">Price

                  </label>

                  <input type="text" class="form-control" id="price" name="price" placeholder="Enter Course Price" required="">

                </div>

              </div>

              <div class="col-xl-6 col-lg-6">

                <div class="form-group">

                  <label for="duration">Duration

                  </label>

                  <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Course Duration" required="">

                </div>

              </div>

              <div class="col-xl-6 col-lg-6">

                <div class="form-group">

                  <label for="startDate">Start Date

                  </label>

                  <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Enter The Start Date" required="">

                </div>

              </div>

              <div class="col-xl-6 col-lg-6">

                <div class="form-group">

                  <label for="objectives">Objectives

                  </label>

                  <input type="text" class="form-control" id="objectives" name="objectives" placeholder="Enter course objectives" required="">

                </div>

              </div>

              <div class="col-xl-6 col-lg-6">

<div class="form-group">

<select id="trainer" data-placeholder="Choose trainer " name="trainer" style="">
<option selected="selected" class="form-group">  Choose Trainer
</option>
                                            <?php
global $con;
$query = $con->prepare("SELECT * FROM trainer;");
$query->execute();
$trainers = $query->fetchAll();
foreach($trainers as $trainer) {
echo '<option value="' . $trainer['ID'] . '">' . $trainer["fullName"] .'</option>';
}
?>
</select>
</div>

</div>

              <div class="col-xl-12 col-lg-12">

                <div class="form-group">

                  <label for="descriptiom">Description

                  </label>

                  <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Course description" required="">

                  </textarea>

                </div>

              </div>

            </div>

          </form>

        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close

          </button>

          <button type="submit" class="btn btn-success" form="addForm">Add </button>

          

        </div>

      </div>

    </div>

  </div>

  <!--================ end add modal Area =================-->

  <!--================ start footer Area  =================-->  

  <?php

include 'includes/footer.php';

?>

  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="js/jquery-3.3.1.min.js">

  </script>

  <script src="js/popper.js">

  </script>

  <script src="js/bootstrap.min.js">

  </script>

  <script src="js/stellar.js">

  </script>

  <script src="vendors/lightbox/simpleLightbox.min.js">

  </script>

  <script src="vendors/nice-select/js/jquery.nice-select.min.js">

  </script>

  <script src="vendors/isotope/imagesloaded.pkgd.min.js">

  </script>

  <script src="vendors/isotope/isotope.pkgd.min.js">

  </script>

  <script src="vendors/owl-carousel/owl.carousel.min.js">

  </script>

  <script src="js/jquery.ajaxchimp.min.js">

  </script>

  <script src="vendors/counter-up/jquery.waypoints.min.js">

  </script>

  <script src="vendors/popup/jquery.magnific-popup.min.js">

  </script>

  <script src="vendors/counter-up/jquery.counterup.js">

  </script>

  <script src="js/mail-script.js">

  </script>

  <script src="js/theme.js">

  </script>

  <script src="js/sweetalert2.min.js">

  </script>

  <script>

   $(document).ready(function(){
     $(".delrequest").click(function(){
       var ths = $(this);
       var thId = $(this).data("id");
       console.log(thId);
       Swal({
        title: ' are you sure?',
        text: " You can't get this record back once you hit yes",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: ' yes delete this',
        cancelButtonText: '  close '
        }).then((result) => {
        if (result.value) {
         
       $.ajax({
         url: "delete.php",
         data: {ID : thId},
         type: 'POST'
       })
      
       .done(function(data){
         ths.parent("td").parent("tr").fadeOut(600, function(){
           ths.remove();
           Swal(
            'record deleted',
            ' you have deleted this record successfully',
            'success' )
         });
         
       })
       .fail(function(data){
          alert("error");
       });
        }
        })

     });
   });
</script>

    </body>
</html>