<html>
<head>
<script>
function myValidation(inputEle, checkValue){
	let name = inputEle.name;
	let vid = "validation." + name;
	let vele = document.getElementById(vid);
	let value = inputEle.value;
	if(value === checkValue){
		if(vele){
			vele.remove();
		}
	}
	else{
		if(!vele){
			vele = document.createElement("span");
			vele.id = vid;
			document.body.appendChild(vele);
		}
		vele.innerText = name + " has an invalid value";
	}
	return false;
}
function myValidationemail(inputEle){
        let name = inputEle.name;
        let vid = "validation." + name;
        let vele = document.getElementById(vid);
        let value = inputEle.value;
       	if(!vele){
                        vele = document.createElement("span");
                        vele.id = vid;
                        document.body.appendChild(vele);
                }



		 if (value.indexOf("@", 0) < 0)                 
    { 
        vele.innerText=  " Please enter a valid e-mail address."; 
}
        
         if (value.indexOf(".", 0) < 0)                 
    { 
         vele.innerText= "Please enter a valid e-mail address.";
    } 

	return false;
}
function myValidationconfiremail(inputEle,checkValue){
 let name = inputEle.name;
        let vid = "validation." + name;
        let vele = document.getElementById(vid);
        let value = inputEle.value;
if(value == checkValue){
                if(vele){
                        vele.remove();
	vele.innerText= "email address has matched";
                }
        }

else { 
       if(!vele){
                  	vele = document.createElement("span");
                        vele.id = vid;
                        document.body.appendChild(vele);
                }
	vele.innerText= " email addresses should match";
}

return false;
}


</script>
</head>

<body>
<form onsubmit="return false;">
<input type="text" name="test" placeholder="Trying it out" 
	onchange="myValidation(this, 'hi');"/>
<input name="email" type="email" placeholder="please enter email address"
	onchange="myValidationemail(this);"/>
<input name="emailconfirm" type="email" placeholder="please enter confirm email address"
 	onchange="myValidationconfiremail(this,email);"	/>
<input name="password" type="password"placeholder="please enter password"/>
<input name="passwordconfirm" type="password"placeholder="please enter confirm password"/>
<input name="username"placeholder="enter username"/>

<input type="submit" value="Submit" />

</form>
</body>
</html>
