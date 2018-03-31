
<?php

if(isset($_POST['submit']))
{

$e=$_POST["email"];
$ph=$_POST["phone"];


$p=$_POST["password"];
$rp=$_POST["retypepassword"];
$database=mysqli_connect('localhost','root','','userdb')
or die("didnt work");
$database1=mysqli_connect('localhost','root','','')
or die("didnt work");
//echo "select * from userdetails where email='$e'";
//echo "<br>";
$res=mysqli_query($database,"select * from userdetails where email='$e'");
$res1=mysqli_query($database,"select * from userdetails where phone='$ph'");
$result=mysqli_fetch_array($res,MYSQLI_NUM);
$result1=mysqli_fetch_array($res1,MYSQLI_NUM);
//echo "Create Database user".$ph;
//echo "<br>";
if($result[0]!="" || $result1[0]!="")
{
	//echo "<h2>Email or phone number Already Exists. Please Log In. </h2> <br>" ;
	//echo "<button onclick=\"location.href = 'SignUp.html';\" id=\"myButton\" class=\"float-left submit-button\" >Click Here To Log In!</button>";
	echo" <script> alert(\"Email or phone number Already Exists. Please Log In Or Recheck!\"); window.location = \"sign_up.html\";</script>";

}
else
{
if($p==$rp) 
{
				$new=$ph;
$arr=array('0','8','2','3','9','5','6','7','1','4');
$arr1=array('r','a','s','p','b','e','r','i','e','s');
$ephone=str_replace($arr,$arr1,$new);
$ephone="user".$ephone;

if(mysqli_query ($database,"insert into userdetails(email, pass,phone) values('$e','$p','$ph')"))
{
	if(mysqli_query ($database1,"Create Database user".$ph))
	{   $database2=mysqli_connect('localhost','root','','user'.$ph)
or die("didnt work");
		//echo "inside if<br>";
		//echo "Create Table formGen(formid int(30))<br>";
		//echo "Create Table formDetails(formName varchar(30),formLink varchar(30)";
		if(mysqli_query ($database2,"Create Table formGen(formid int(30))") && mysqli_query ($database2,"insert into formGen(formid) values(0)") && mysqli_query($database2,"Create Table formDetails(formName varchar(300),formLink varchar(300))" )&& mkdir("E:\\Xampp\\htdocs\\project1\\users\\".$ephone))
		{
			//echo "Registration Successful";

			 session_start();
             $_SESSION["email"]=$e;
             $_SESSION["phone"]=$ph;
             $_SESSION["db"]="user".$_SESSION['phone'];
			// mkdir("E:\\Xampp\\htdocs\\project1\\users\\".$ephone);

 //echo "<button onclick=\"location.href = 'build_form.php';\" id=\"myButton\" class=\"float-left submit-button\" >Build Form</button>";
 header('Location: formlist.php');
		}
		else
		{
			mysqli_query ($database,"Delete from userdetails where email='$e'");
			mysqli_query ($database1,"Drop database user".$ph);
			echo" <script> alert(\"Registration Unsuccessful! Please Try Again Later.\"); window.location = \"sign_up.html\";</script>";
			
		}
			
	}
	else
	{
		mysqli_query ($database,"Delete from userdetails where email='$e'");
		//echo "Unsuccessful! Please try again later.";
		echo" <script> alert(\"Registration Unsuccessful! Please Try Again Later.\"); window.location = \"sign_up.html\";</script>";
	}
}
//entering all te details into database


mysqli_close($database);

//header("Location:target.html");

}
else
echo" <script> alert(\"Passwords Don't Match!\"); window.location = \"sign_up.html\";</script>";
}
}

?>


