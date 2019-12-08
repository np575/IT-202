<?php
require('dbconnection.php');
include("authorization.php");
$id=$_REQUEST['id'];
$query = "SELECT * from volunteer where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
| <a href="insert1.php">Insert New Record</a> 
| <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$email =$_REQUEST['email'];
$number=$_REQUEST['number'];
$timeinfo =$_REQUEST['timeinfo'];

$update="update volunteer set trn_date='".$trn_date."',
name='".$name."', email='".$email."',number='".$number."',
timeinfo='".$timeinfo."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view1.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />

<p><input type="text" name="name" placeholder="Enter Name" 
required value="<?php echo $row['name'];?>" /></p>

<p><input type="email" name="email" placeholder="Enter Email" 
required value="<?php echo $row['email'];?>" /></p>


<p><input type="text" name="number" placeholder="Enter contact number"
required value="<?php echo $row['number'];?>" /></p>


<p> <textarea  name="timeinfo" rows="5" cols="40"> <?php echo $row['timeinfo'];?>  </textarea></p>

<p><input name="submit" type="submit" value="Update" /></p>

</form>
<?php } ?>
</div>
</div>
</body>
</html>
