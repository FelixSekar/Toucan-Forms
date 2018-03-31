<head>
	<link rel="stylesheet" type="text/css" href="intro.css" media="screen">
<link href="https://fonts.googleapis.com/css?family=Dosis:800|Rambla:700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
</head>
<body >
<?php
session_start(); 
//WE NEED SESSION TO ACCESS THE FILE NAME IN ANOTHER PHP FILE
//$_SESSION[] is a super global variable
//we need to call session_start() in the file to access $_SESSION[]
if(isset($_POST['fCode']))
{
$fCode=$_POST['fCode'];
$fCode=base64_decode($fCode);

$dbName=$_SESSION["db"];
echo "<br>";
$database=mysqli_connect('localhost','root','',$_SESSION["db"])
or die("didnt work");
$q="select formid from formgen"; //select field from table based on email provided by the user
//echo " $q ";
$r=mysqli_query ($database,"$q");
$result=mysqli_fetch_array($r,MYSQLI_NUM);
$id=$result[0];
echo "<br>";
$f="myForm".$id;
$file="myForm".$id.".php";
//echo $id;
//retrieve the form number from database
$txt="
<html>
<head>

<link rel='stylesheet' type='text/css' href='http://localhost/project1/build_form.css'>
<link rel='stylesheet' href='//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css'>
<link rel='stylesheet' href='/resources/demos/style.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://code.jquery.com/ui/1.12.1/jquery-ui.js'></script>

<?php
session_start();
\$f2=\"$f\";
\$_SESSION['fileName']=\$f2;
\$_SESSION['dbName']=\"$dbName\";
\$_SESSION['mail']=\"$_SESSION[email]\";



echo \"<br>\";

?>

</head>
<body>
<div id='preview'>
<form method='POST' action='http://localhost/project1/Submission/accessFinal.php' id='form2'>".$fCode."</form></body></html>
</div>";


$new=(string)$_SESSION['phone'];
$arr=array('0','8','2','3','9','5','6','7','1','4');
$arr1=array('r','a','s','p','b','e','r','i','e','s');
$ephone=str_replace($arr,$arr1,$new);

$ephone="user".$ephone;
/*echo "ephone value".$ephone."<br>";
echo "session value".$_SESSION['phone']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";*/
//chdir($_SERVER['DOCUMENT_ROOT']."/project1/users/");
//$cd=getcwd();
//echo $cd."<br>";
//mkdir("E:\\Xampp\\htdocs\\project1\\users\\".$ephone);
$myfile = fopen("E:\\Xampp\\htdocs\\project1\\users\\$ephone\\".$file, "w") or die("Unable to open file!");
fwrite($myfile, $txt);
$link="http://localhost/project1/users/$ephone/".$file;

echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Share this link to publish your form:</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%"href="'.$link.'">'.$link.'</a></h3>';
//after creating the link, increment the value in database.
$id1=$id+1;
$q1="update formGen set formid='$id1' where formid='$id'";
$q2="insert into formdetails (formName, formLink) values('$f','$link')";
//echo $q2;
mysqli_query ($database,"$q1");
mysqli_query ($database,"$q2");
mysqli_close($database);
$_SESSION['fileName']=$f; //WILL REUSE THE SAME VARIABLE IN accessFinal.php

// NEW LOCATION LINE ADDED

//header("Location:accessFinal.php");

}
else
{
	echo '<h3 style="color:red ; font-size:200%; position: absolute; top:40%; left:25%">Please Create A Form First:</h3><h3><a style=" font-size:200%; position: absolute; top:50%; left:25%" href="build_form.php">FORM BUILDER</a></h3>';
	
}
//session_start();
if(!isset($_SESSION['email']))
{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<<li><a href="intro.php">Home</a></li>
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
else{
	echo'	<div class="nav_bar">
<nav>
	<ul>
<li><a href="intro.php">Home</a></li>
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
