<head>
<link rel="stylesheet" type="text/css" href="intro.css" media="screen">
	<link rel="stylesheet" type="text/css" href="table.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Rambla:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body style="background-color: powderblue;" >

<?php
session_start();
$table="";
//echo "<h1 align=\"center\" style=\" font-size:150%;  top:8%; left:15%; >Selected Form Submissions</h1>";
if(isset($_SESSION["cForm"]))
{
	
$database=mysqli_connect('localhost','root','',$_SESSION["db"])
or die("didnt work");
//echo "$_SESSION[db]";
//echo "</br>$_SESSION[cForm]";
$q1="Select * from $_SESSION[cForm]";
//$q2="SHOW columns FROM userdetails";
//echo "create Table $_SESSION[cForm](chk varchar(20))";
$result=mysqli_query($database, $q1);
$result1=mysqli_query($database, $q1);

if($result)
{


//$r=mysqli_fetch_array($result);
//echo $result;
//echo mysql_field_name($result, 2);
	//$r=mysqli_fetch_assoc($result);
$table="<table cellpadding='10' style=\"border: 1px solid black; border-spacing: 5px; position:absolute; top:30%; left:15%; \" align=\"center\">";

$t=mysqli_fetch_assoc($result1);
if(!empty($t))
{
foreach($t as $column=>$value)
$table=$table."<th style=\"border: 1px solid black\"> $column </th>";
}


$n=mysqli_num_fields($result);
//echo $n."<br>";
while($r=mysqli_fetch_assoc($result))
{   $table=$table."<tr style=\"border: 1px solid black\" >";
	foreach($r as $column=>$value)
	{
		if($column=="formFile")
	$table=$table."<td style=\"border: 1px solid black\" ><form action=\"\" method=\"post\"><button type=\"submit\" name=\"formSub\" value=\"$value\" onclick=\"location.href='formlist.php';\">$value</button></form></td>";
else
	$table=$table."<td style=\"border: 1px solid black\" >$value</td>";
	}
	$table=$table."</tr>";
    //echo $column." ".$value."<br>";
}

$table=$table."</table>";
}
else
{
	//mysqli_query($database,"Drop table $_SESSION[cForm]");
}
mysqli_close($database);
echo $table;
}
else
{
	
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



?>
</body>

