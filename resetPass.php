<html>
<title>Reset | ToucanForms</title>
<head>
<link rel="stylesheet" href="resetPass.css" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Heebo:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
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
  <div class="container">
   <div class="header">
  <h3>Forgot password? No problem!</h3>
   </div>


    <form action="reset.php" method="post">
      <input id="email" name="email" placeholder="email" type="email" required/>
      <input id="password" name="phone" placeholder="number" type="number" required/>
      <button value="Click To Reset Password" type="submit" name="submit" value="Log In">Send</button>
    </form>


  <a href="intro.html"><img id="logo" src="images/logo.png"></a>
  <h2>Reset.</h2>
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

</body>
</html>
