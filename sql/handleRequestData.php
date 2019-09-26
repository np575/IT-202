<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}

if(isset($_GET['number'])){
	$number = $_GET['number'];
	echo "<br>" . $number . " should be a number..";
	echo "<br>but it might not be<br>";
}
if(isset($_GET['number1'])){
	$number1 = $_GET['number1'];
	echo "<br>" . $number1 . " should be a number...";
	echo "<br>but it might not be<br>";
}
?>
