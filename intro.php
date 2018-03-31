<html>
<title>
Toucan Forms
</title>


<head>
<link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="intro.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Rambla:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>

<body>
<img id="logo" src="images/pnglogo.png">
<h1>Toucan<br>Forms</h1>
<div id="back_logo"></div>
<?php
session_start();

if(isset($_SESSION['email']))
{
?>


<div class="nav_bar">
<nav>
	<ul>
<li><a href="intro.php">Home</a></li>
<li><a href="build_form.php">Dynamic forms</a></li>
<li><a href="resetPass.php">Reset_Password</a></li>
&emsp;
<span id="in">
	<li><a href="formlist.php">My Forms</a></li>
</span>
<span id="out">
  <li><a href="logout.php">Sign Out</a></li>
</span>
	</ul>
</nav>
</div>
<?php
}
else
{
	?>
	<div class="nav_bar">
<nav>
	<ul>
<li><a href="intro.php">Home</a></li>
<li><a href="build_form.php">Dynamic forms</a></li>
<li><a href="resetPass.php">Reset_Password</a></li>
&emsp;
<span id="in">
	<li><a href="sign_in.html">Sign-in</a></li>
</span>
<span id="out">
  <li><a href="sign_up.html">Sign-up!</a></li>
</span>
	</ul>
</nav>
</div>
<?php
}
?>

<p>
	FORMidable forms<br>programmed
</p>
<div class="footer"></div>
<ul id="footer_tags">

	<li><a href="about.html">About</a></li>
	<li><a href="developers.php">Developers</a></li>
	<li><a href="">Contact</a></li>

</ul>

<img id="pad" src="images/pad.png">
<?php


if(isset($_SESSION['email']))
{
?>
<h2><a href="build_form.php">Build It!</a></h2>
<?php
}
else
{
?>
	<h2><a href="sign_in.html">sign-in</a></h2>
<?php
}
?>
<div id="circle1"></div><br><br>
<div id="circle2"></div><br>
<div id="circle3"></div><br>
<div id="circle4"></div><br>
<div id="circle5"></div><br>
<div id="circle6"></div><br>
<div id="circle7"></div><br>
<div id="circle9"></div><br>
<div id="circle8"></div><br>

<p id="Learn"><a href="guide.html">Learn more</a></p>

</body>
</html>