<html>
<head>
<!--css and js here -->
<script>
function pageLoaded(){

//alert("hello world");
//var myVariable;
let myOtherVariable;
//myVariable = prompt("what's your name?");
//alert ("hellooooo, " + myVariable);

let myNum=0;
for(let i = 0; i < 10; i++){
	myNum += 0.1;
}
//alert ("My num is 1: " + (myNum == 1) + "\nMy Num: " + myNum);
console.log("my num is 1: " + (myNum == 1) + "\nmy num: " + myNum);

let myParagraph = document.getElementById("myParagraph");
console.log(myParagraph);
}
</script>
</head>

<body  onload="pageLoaded();console.log('loaded');">
<! -- html content -->
<p id= "myParagraph">It loaded, yay!</p>
</body>
</html>
