<html>
<title>Developers | ToucanForms</title>
<head>
<link rel="stylesheet" href="developers.css" type="text/css" media="screen">
<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Heebo:700" rel="stylesheet">
<style>


nav{
	background-color: #091413;
	height: 60px;
	width: 650px;
	border-radius: 10;
	border-color: black;
	border-width: 3px;

}
nav ul li {
  list-style-type: none;
	display: inline;
	width: 130px;
}

nav ul li a{
	text-decoration: none;
	line-height: 60px;
	color: white;
	font-family: 'Dosis', sans-serif;
	padding: 10px;
	font-size: 20px;
}

li a:hover{
	color:yellow;
}

.nav_bar{
  position: fixed;
	top: 10px;
	left: 730px;
}

</style>
</head>

<body>
<?php
session_start();
if(!isset($_SESSION['email']))
{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<li><a href="http://localhost/project1/intro.php">Home</a></li>
<li><a href="build_form.php">Dynamic forms</a></li>
<li><a href="">Pricing</a></li>
&emsp;
<span id="in">
	<li><a href="sign_in.html">Sign-in</a></li>
</span>
<span id="out">
  <li><a href="sign_up.html">Sign-up!</a></li>
</span>
	</ul>
</nav>
</div> ';

}
else
{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<li><a href="http://localhost/project1/intro.php">Home</a></li>
<li><a href="build_form.php">Dynamic forms</a></li>
<li><a href="">Pricing</a></li>
&emsp;
<span id="in">
	<li><a href="formlist.php">My Forms</a></li>
</span>
<span id="out">
  <li><a href="logout.php">Sign Out</a></li>
</span>
	</ul>
</nav>
</div>';
}
?>

<div id="dev_pics">

<img id="dev_pics" src="images/geo.jpg"> <br>
<img id="dev_pics" src="images/mathai.jpg"><br>
<img id="dev_pics" src="images/felix.jpg"><br>
<img id="dev_pics" src="images/jenifa.jpg"><br>
</div>

<h2>Developers.</h2>
<img id="lap" src="images/dev_laptop.png">
<h4 > < Geo Mukkath > </h4>
<h4 > < Mathews Mathai ></h4>
<h4 >< Felix Sekar ></h4>
<h4 >< Jenifa Nadar ></h4>

<h3> |</h3>
<a href="intro.html"><img  id="logo" src="images\logo.png"></a>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script type="text/javascript" src="developers.js"></script>
</body>
</html>
