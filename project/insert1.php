<?php
require('dbconnection.php');
include("authorization.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $timeinfo = $_REQUEST['timeinfo'];
   
    	
    $ins_query="insert into volunteer
    (`trn_date`,`name`,`email`,`number`,`timeinfo`)values
    ('$trn_date','$name','$email','$number','$timeinfo')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view1.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="view1.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="email" name="email" placeholder="Enter email address" required /></p>
<p><input type="text" name="number" placeholder="Enter the contact number" required /></p>
<p> enter you availability below to volunteer</p>
 <textarea  name="timeinfo" rows="5" cols="40"> </textarea>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
