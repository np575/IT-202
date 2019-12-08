<?php
require('dbconnection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM volunteer WHERE id=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view1.php");
?>

