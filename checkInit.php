
<?php
$database=mysqli_connect('localhost','root','','userdb')
or die("didnt work");
if(!empty($_POST["email"])) {

$result=mysqli_query($database,"select * from userdetails where email='$_POST[email]'");
$row=mysqli_fetch_array($result);
if($row[0]!="") 
	echo "E-Mail Id Already Registered";
else 
	echo "";
}
?>