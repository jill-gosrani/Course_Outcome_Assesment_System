<?php
include 'login_config.php';
session_start();

$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$co_mapping="";
$pso1=$pso2=$po1=$po2=$po3=$po4=$po5=$po6=$po7=$po8=$po9=$po10=$po11=$po12=null;
if(isset($_POST['pso1']))
{
	$pso1=$_POST['pso1'];
	$co_mapping.="`pso1`";
} 
if(isset($_POST['pso2']))
{
	$pso2=$_POST['pso2'];
	$co_mapping.=",`pso2`";
}
if(isset($_POST['po1']))
{
	$po1=$_POST['po1'];
	$co_mapping.=",`po1`";
}
if(isset($_POST['po2']))
{
	$po2=$_POST['po2'];
	$co_mapping.=",`po2`";
}
if(isset($_POST['po3']))
{
	$po3=$_POST['po3'];
	$co_mapping.=",`po3`";
}
if(isset($_POST['po4']))
{
	$po4=$_POST['po4'];
	$co_mapping.=",`po4`";
}
if(isset($_POST['po5']))
{
	$po5=$_POST['po5'];
	$co_mapping.=",`po5`";
}
if(isset($_POST['po6']))
{
	$po6=$_POST['po6'];
	$co_mapping.=",`po6`";
}
if(isset($_POST['po7']))
{
	$po7=$_POST['po7'];
	$co_mapping.=",`po7`";
}

if(isset($_POST['po8']))
{
	$po8=$_POST['po8'];
	$co_mapping.=",`po8`";
}

if(isset($_POST['po9']))
{
	$po9=$_POST['po9'];
	$co_mapping.=",`po9`";
}

if(isset($_POST['po10']))
{
	$po10=$_POST['po10'];
	$co_mapping.=",`po10`";
}

if(isset($_POST['po11']))
{
	$po11=$_POST['po11'];
	$co_mapping.=",`po11`";
}

if(isset($_POST['po12']))
{
	$po12=$_POST['po12'];
	$co_mapping.=",`po12`";
}
// echo $co_mapping;
$co_no=array('CO1','CO2','CO3','CO4','CO5','CO6');
$key=0;
echo $course_id;
$sql="";
$sql.="INSERT INTO `po_pso`(`course_id`, `pso1`, `pso2`, `po1`, `po2`, `po3`, `po4`, `po5`, `po6`, `po7`,`po8`,`po9`,`po10`,`po11`,`po12`, `term`) VALUES('$course_id','$pso1[$key]','$pso2[$key]','$po1[$key]','$po2[$key]','$po3[$key]','$po4[$key]','$po5[$key]','$po6[$key]','$po7[$key]','$po8[$key]','$po9[$key]','$po10[$key]','$po11[$key]','$po12[$key]','$term');";


if (mysqli_multi_query($conn, $sql))
{
	header("Location: po_pso_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: po_pso_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 