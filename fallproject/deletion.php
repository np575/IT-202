<?php
require('dbconnect.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM Appointments WHERE id=$id";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php");
?>