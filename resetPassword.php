<html>
<head>
<link rel="stylesheet" type="text/css" href="intro.css" media="screen">
	<link rel="stylesheet" type="text/css" href="table.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Rambla:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>

<body style="background-color: yellow;">
<?php
session_start();
//forgot password script. Data entered in password reset form will be send to this script
if(isset($_POST['reset'])) //same as in other 2 scripts
{
  $e=$_POST["email"];
 $p=$_POST["password"];
 $p1=$_POST["retypepassword"];
 
 if($p==$p1) //proceed only if new password and rentered password match
 {
 $database=mysqli_connect('localhost','root','','userdb')
or die("didnt work");


$q1="update userdetails set pass='$p' where email='$e'";
//echo "$q1";
mysqli_query ($database,"$q1");
//echo "SUCCESSFULL";
session_destroy();
echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Password Changed Successfully</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="http://localhost/project1/sign_in.html">Click Here To Log In!</a></h3>';
//header("Location:intro.php");
//target login page after password reset
mysqli_close($database);
}

else
{
	
	echo "Some error occured. Please try again later.";
	}


 }
else //for password and rentered password not matching
echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Access Denied:</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="http://localhost/project1/intro.php">Click Here To Visit Home Page!</a></h3>';

if(!isset($_SESSION['email']))
{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<li><a href="http://localhost/project1/intro.php">Home</a></li>
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
</div> ';
//echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Access Denied:</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="http://localhost/project1/intro.php">Click Here To Visit The Home Page</a></h3>';
}
else{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<li><a href="http://localhost/project1/intro.php">Home</a></li>
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
</div>';
}

?>


  
  </body>
  </html>

