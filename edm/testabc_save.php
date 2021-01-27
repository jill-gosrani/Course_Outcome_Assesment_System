<?php
include 'login_config.php';
session_start();
$refprimarykey=$_POST['roll_no'];
//$courseic=$_POST['course_ic'];
$ia1q1a=$_POST['ia1q1a'];
$ia1q1b=$_POST['ia1q1b'];
$ia1q1c=$_POST['ia1q1c'];
$ia1q1d=$_POST['ia1q1d'];
$ia1q1e=$_POST['ia1q1e'];
$ia1q1f=$_POST['ia1q1f'];
$ia1q2a=$_POST['ia1q2a'];
$ia1q2b=$_POST['ia1q2b'];
$ia1q3a=$_POST['ia1q3a'];
$ia1q3b=$_POST['ia1q3b'];
//$ia1q1a=$_POST['ia1q1a'];
//$ia1q1a=$_POST['ia1q1a'];
//$term=$_SESSION['term'];
//$sem=$_POST['sem'];
$sql="";
foreach( $refprimarykey as $key => $n ) 
{
	if($ia1q1a[$key]!="")
	{
		$sql.="INSERT INTO `students` VALUES('$n',$ia1q1a[$key]','ia1q1a', 'ia1q1b', 'ia1q1c', 'ia1q1d', 'ia1q1e', 'ia1q1f', 'ia1q2a', 'ia1q2b', 'ia1q3a', 'ia1q3b',);";
	}
}
if (mysqli_multi_query($conn, $sql))
{ 
	header("Location: testabc.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: testabc.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 