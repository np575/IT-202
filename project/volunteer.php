<?php
require('dbconnection.php');
include("authorization.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome this is the Form to volunteer.</p>
<p><a href="index.php">Home</a><p>
<p>Enter all of the information below to volunteer.</p>
<p><a href="insert1.php">Insert New Record</a></p>
<p> click below to view information.</p>
<p><a href="view1.php">View Records</a><p>
<p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
