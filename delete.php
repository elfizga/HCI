<?php
include 'includes/connect.php';

$id = $_POST['ID'];

echo $id ;

$query1 = $con->prepare( "DELETE FROM courses WHERE ID = ?"
);

$query1->execute(array( $id ));
?>