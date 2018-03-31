<html>
<title>Reset | ToucanForms</title>
<head>
<?php

session_start();
?>
<link rel="stylesheet" href="resetPass.css" type="text/css" >
<link href="https://fonts.googleapis.com/css?family=Heebo:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Just+Another+Hand" rel="stylesheet">
<style>


body{
	background-color: #131045;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.4'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
overflow:inherit;
overflow-y:hidden;
}

.container {
	position: fixed;
	left: 40%;
	top: 100px;
	height: 450px;
	width: 320px;
	background-color: yellow;
	border: thick 3px white;
  border-radius: 7px;
	box-shadow: 10px 10px 0px ;
}

.header{
 height: 70px;
 width: 320px;
 position: fixed;
  left: 40%;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
  z-index: 1;
	background-color: #FCFCFC;
}

#logo{
	position: fixed;
	top: 10px;
	left: 1%;
	height: 100px;
	width: 100px;
  border-width: 3px;
	border-color: darkblue;
	z-index: 1;
}
#password{
 top: 170px;
 left: 52px;
 position: absolute;
 border-width: 2px;
 border-style: solid;
 border-radius: 3px;
 height: 50px;
 border-color:#131045;
}

#retypepassword{
	top: 250px;
  left: 52px;
  position: absolute;
  border-width: 2px;
  border-style: solid;
  border-radius: 3px;
	border-color: #131045;
  height: 50px;
}
#email:hover{
	border-color: #131045;
}
input,
input::-webkit-input-placeholder {
    font-size: 20px;

}
h2{
	font-size: 30px;
	font-family: 'Heebo', sans-serif;
	position: fixed;
	left: 3px;
	top: 100px;
	color: yellow;
}

button{
	  height: 50px;
	  width: 120px;
	  bottom: 30px;
	  position: absolute;
  	left: 30%;
    background-color: white;
    border: 2px solid #4CAF50;
    color:  #131045;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
		border-radius: 3px;
}
button:hover{
	border-color: lightblue;
}

button:active{
	border-color:blue ;
}
h3{
font-family: 'Just Another Hand', cursive;
color: #0B4F6C;
left: 40px;
position: relative;
font-size: 35px;
padding-bottom: 40px;
}



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

//forgot password script. Data entered in password reset form will be send to this script
if(isset($_POST['submit'])) //same as in other 2 scripts
{
 $e=$_POST["email"];
 $m=$_POST["phone"]; 
 
 
 $database=mysqli_connect('localhost','root','','userdb')
or die("didnt work");
$q="select phone from userdetails where email='$e'"; 
$r=mysqli_query ($database,"$q");
$result=mysqli_fetch_array($r,MYSQLI_NUM);
echo $result[0];	

if($m==$result[0]) //if user provided field value matches with db value (based on email id), allow reset password
{

echo "<div class=\"container\">
   <div class=\"header\">
  <h3>Forgot password? No problem!</h3>
   </div>
<form action=\"resetPassword.php\" method=\"post\">
       
<input type=\"password\" id=\"password\" name=\"password\" placeholder=\"New Password\" required/>

<input type=\"password\" id=\"retypepassword\"; name=\"retypepassword\" placeholder=\"New Password\"required/>
<input type=\"hidden\"   name=\"email\" value=\"$e\" />
<button type=\"submit\" name=\"reset\" value=\"Reset\"/>Submit</button>

</form> 
<a href=\"intro.html\"><img id=\"logo\" src=\"images/logo.png\"></a>
  <h2>Reset Password.</h2>";
}

else
{
	//if credentials don't match
	echo '<h1 style="color:red ; position: absolute; font-size:200%; top:35%; left:35%">Invalid Credentials!</h1>';
	echo "<button onclick=\"location.href = 'resetPass.php';\" id=\"myButton\" class=\"float-left submit-button\" style=\"top:50%; left:45%\">Click Here To Retry!</button>";
	
	}

mysqli_close($database);
}
else
{

echo '<h1 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Access Denied:</h1><h1><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="http://localhost/project1/intro.php">Click Here To Visit The Home Page</a></h1>';
}

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