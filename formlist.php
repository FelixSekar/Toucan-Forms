<head>
	<link rel="stylesheet" type="text/css" href="intro.css" media="screen">
	<link rel="stylesheet" type="text/css" href="table.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Rambla:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body style="background-color: yellow;">
<?php
session_start();
if(isset($_SESSION['email']))
{
if(isset($_POST['formSub']))
{
	//echo $_POST['formSub'];
	$_SESSION["cForm"]=$_POST['formSub'];
	echo "<button align=\"center\"><a align=\"center\" href=\"formDisplay.php\" target=\"_blank\">Click Here To Check $_POST[formSub] submissions</a></button>";
	
}


//echo "Check! <br>";
echo "<h1 align=\"center\" style=\" font-size:250%; position: absolute; top:8%; left:15%; \">Your Toucan Forms</h1>";
$database=mysqli_connect('localhost','root','',$_SESSION["db"])
or die("didnt work");
$q1="Select * from formdetails";
//$q2="SHOW columns FROM userdetails";
$result=mysqli_query($database, $q1);
$result1=mysqli_query($database, $q1);

//$r=mysqli_fetch_array($result);
//echo $result;
//echo mysql_field_name($result, 2);
	//$r=mysqli_fetch_assoc($result);
$table="<table cellpadding='10' style=\"border: 1px solid black; position: absolute; top:20%; left:15%; border-spacing: 5px;\" align=\"center\">";

$t=mysqli_fetch_assoc($result1);
if(!empty($t))
{
foreach($t as $column=>$value)
$table=$table."<th style=\"border: 1px solid black\"> $column </th>";
}

$n=mysqli_num_fields($result);
//echo $n."<br>";
while($r=mysqli_fetch_assoc($result))
{   $table=$table."<tr style=\"border: 1px solid black\"  >";
	foreach($r as $column=>$value)
	{
		if($column=="formName")
	$table=$table."<td style=\"border: 1px solid black\" ><form action=\"\" method=\"post\"><button type=\"submit\" name=\"formSub\" value=\"$value\" onclick=\"location.href='formlist.php';\">$value</button></form></td>";
else
	$table=$table."<td style=\"border: 1px solid black\" >$value</td>";
	}
	$table=$table."</tr>";
    //echo $column." ".$value."<br>";
}

$table=$table."</table>";
mysqli_close($database);
echo $table;


}
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
echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Access Denied:</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="http://localhost/project1/intro.php">Click Here To Visit The Home Page</a></h3>';
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

