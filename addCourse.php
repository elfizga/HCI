<?php 
include 'includes/connect.php';

$isError = false ;
$message ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

      $title = $_POST['title'];
      $price = $_POST['price'];
    $trainer = $_POST['trainer'];
   $duration = $_POST['duration'];
  $startDate = $_POST['startDate'];
 $objectives = $_POST['objectives'];
$description = $_POST['description'];


if(empty($title) ){
    $message .= "please enter course title" ;
    $isError = true ;
}

if(empty($price) ){
    $message .= "please enter course price" ;
    $isError = true ;
    }

if(empty($duration) ){
    $message .= "please enter course duration" ;
    $isError = true ;
}

if(empty($startDate) ){
    $message .= "please enter the start sate" ;
    $isError = true ;
}

 if(empty($objectives) ){
    $message .= "please enter course objectives" ;
     $isError = true ;
}

if(empty($description) ){
     $message .= "please enter course description" ;
     $isError = true ;
}

if($isError == false){

    global $con;
    $query = $con->prepare(
        "INSERT INTO courses 
        SET name = ? , description = ?, objectives = ?, trainerID = ? , price = ?, duration = ?, startDate = ?; "
    );
    
    $query->execute(
        array( $title , $description , $objectives , $trainer , $price , $duration , $startDate)
    );

   header('location: admin.php');
   

}





}



?>