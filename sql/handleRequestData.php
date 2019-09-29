<?php

echo "<pre>" . var_export($_GET, true) . "</pre>";
if(isset($_GET['name'])){
	echo "<br>Hello, " . $_GET['name'] . "<br>";
}

if(isset($_GET['number'])){
	$number = $_GET['number'];
        if(is_numeric($number)){
	echo "<br>" . $number . " is a number..<br> ";
        }
        else{
	echo "<br>"  . $number . "  is not  a number<br>";
	}
}
if(isset($_GET['number1'])){
        $number1 = $_GET['number1'];
       	if(is_numeric($number1)){
        echo "<br>" . $number1 . " is a number..<br> ";
       	}  
       	else{
        echo "<br>"  . $number1 . " is  not a number <br>";
        }
}

$a=is_numeric($number);
$b=is_numeric($number1);

if (($a== TRUE) and ($b == TRUE)){
echo "<br>"  . "You can do sum ";
$sum = $number + $number1;
echo "<br> sum: " . $sum;

}
else {
echo "<br>" . " You can't do sum <br>";

}


echo "<br> concatenating strings: " .$number .$number1;
?>
