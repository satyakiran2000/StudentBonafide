<?php
$conn=mysqli_connect('127.0.0.1',"root","","studentbonafide")or 
die("could not connect to database".mysqli_error());
echo "connect succesfully";

$sname=$_POST['name'];
$srollno=$_POST['rollno'];

$sql="select FATHERNAME,STARTINGYEAR,GRADYEAR from studentdetails where ROLLNO='$srollno' and NAME='$sname'";
$r=mysqli_query($conn,$sql);

if(mysqli_num_rows($r)==1)
{
session_start();
$_SESSION['s1name']=$sname;
$_SESSION['s1rollno']=$srollno;


while($row =  mysqli_fetch_assoc($r)) {
      $_SESSION['s1fathername']=$row['FATHERNAME'];
	$_SESSION['s1startyear']=$row['STARTINGYEAR'];
	$_SESSION['s1gradyear']=$row['GRADYEAR'];
       }
if(isset($_SESSION['s1fathername']))
{
header("Location:bonafide.php");
}

}
else
{
echo "<h1> Wrong Entry </h1>";
echo "<h3> Enter Correct Credentials </h3>";

include "loogin.html";


}


mysqli_close($conn);
?>
