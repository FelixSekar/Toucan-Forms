<html>
<head>
<noscript>Your browser does not support JavaScript!</noscript>
</head>
<body>
<?php
//script for log in
//form data in log in form will be submitted to this script
if(isset($_POST['submit'])) //similar to signup script
{
$e=$_POST["email"];
$p=$_POST["password"];
//echo "$e";
//echo $p;

$database=mysqli_connect('localhost','root','','userdb')
or die("didnt work");
$q="select pass,phone from userdetails where email='$e'";
//$q1="select phone from userdetails where email='$e'"; //selecting password from database using provided email id
//echo " $q ";
$r=mysqli_query ($database,"$q");
//$r1=mysqli_query ($database,"$q1");
$result=mysqli_fetch_array($r,MYSQLI_NUM);
//echo $result[0];	
//echo $result[1];
if($p==$result[0]) //if selected email id matches with user entered email id, log in successful
{//echo "SUCCESSFULL";
 session_start();
 $_SESSION["email"]=$e;
 $_SESSION["phone"]=$result[1];
 $_SESSION["db"]="user".$_SESSION['phone'];
 //echo $_SESSION["db"]."<br>";
 //echo "<button onclick=\"location.href = 'build_form.php';\" id=\"myButton\" class=\"float-left submit-button\" >Build Form</button>";
 header('Location: intro.php');
}

else
{
	//echo "<h2>Invalid Credentails. Please try again or Register if you haven't Registered Already!</h2>";
	//echo "<button onclick=\"location.href = 'sign_in.html';\" id=\"myButton\" class=\"float-left submit-button\" >Sign_IN</button>";
	//echo "<button onclick=\"location.href = 'sign_up.html';\" id=\"myButton\" class=\"float-left submit-button\" >Sign_UP</button>";
	echo" <script> alert(\"Invalid Id or password. Please Try Again!\"); window.location = \"sign_in.html\";</script>";
//header function can be used to take back to the login page. Changes can be made.
} //else invalid

mysqli_close($database);
	

}

?>
</body>
</html>

