<!DOCTYPE html>
<html>
<head>
<style>
p{color: blue;}
h1,h2{background-color: yellow;}
.myClassname{background-color:green;}
#myId{}
</style>
<script>
	function queryParam(){
		var params = new URLSearchParams(location.search);
		if(params.has('page')){
			var page = params.get('page');
			var ele = document.getElementById(page);
			if(ele){
				let home = document.getElementById('home');
				let about = document.getElementById('about');
				home.style.display="none";
				about.style.display = "none";
				ele.style.display = "block";
			}
		}
		else{
			let home = document.getElementById('home');
			home.style.display = "block";
			let about = document.getElementById('about');
			about.style.display=  "none";
		}
	}
</script>
</head>
<body onload="queryParam();">
	<header>
		<nav> 
			<a href="?page=home">Home</a> |
			<a href="?page=about">About</a>
			<!--Create route for Home-->
			<!--Create route for About-->
		</nav>
	</header>
	<div id="home">
		This is home
	</div>
	<div id="about" style="display:none;">
		<section class="myClassname">
			<h1>About</h1>
			<p>Here's a story about something related to something...</p>
		</section>
		<article>
  		<header>
   	 	<h1>What Do we do?</h1>
    		<p>our mission:</p>
  		</header>
  		<p>our mission is to ......
		.........   </p>
		</article>
		<p>last updated <time>00:00</time></p>
		<!-- About page using HTML5 Semantics-->
		<p>Task Completion: <progress value="15" max="100"
			onclick="this.value++" 
			oncontextmenu="this.value--;event.preventDefault();"></progress></p>
	</div>
	<footer></footer>
</body>
</html>
