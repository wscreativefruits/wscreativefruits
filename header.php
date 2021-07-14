<?php
   session_start();
?>

<DOCTYPE html>
<html>
	<head>
		<title> WS Creative Fruits </title>
		<meta charset="UTF=-8">

		<!--import bootstrap -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!--My Style Sheet-->
		
		<link rel="stylesheet" href="style/style.css">
	</head>
	<body>
			<header class="page-header">
				<a href="index.php"><h1> W.S CREATIVE FRUITS </h1></a>
				<nav>
					<ul class="nav__links">
						<li class="group1"><a href="products.php">Products</a></li>
						<li class="group1"><a href="about.php">About</a></li>
						<li class="group1"><a href="social.php">Social</a></li>
					</ul>
				</nav>
				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Contact</button></a>
					<div id="myDropdown" class="dropdown-content">
						<a>(646) 377-8870</a>
    					</div>	
				</div>
			</header>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

				
				
