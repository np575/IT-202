
<?php
require('dbconnection.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_records WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>
