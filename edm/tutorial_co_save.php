 <?php
include 'login_config.php';
session_start();
$co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];


$tut="";
$tut1=$tut2=$tut3=$tut4=$tut5=null;
if(isset($_POST['tut1']))
{
	$tut1=$_POST['tut1'];
	$tut.=",`tut1`";
} 
if(isset($_POST['tut2']))
{
	$tut2=$_POST['tut2'];
	$tut.=",`tut2`";
}
if(isset($_POST['tut3']))
{
	$tut3=$_POST['tut3'];
	$tut.=",`tut3`";
}
if(isset($_POST['tut_4']))
{
	$tut4=$_POST['tut4'];
	$tut.=",`tut4`";
}
if(isset($_POST['tut5']))
{
	$tut5=$_POST['tut5'];
	$tut.=",`tut5`";
}
if(isset($_POST['tut6']))
{
	$tut6=$_POST['tut6'];
	$tut.=",`tut6`";
}
if(isset($_POST['tut7']))
{
	$tut7=$_POST['tut7'];
	$tut.=",`tut7`";
}
if(isset($_POST['tut8']))
{
	$tut8=$_POST['tut8'];
	$tut.=",`tut8`";
}
if(isset($_POST['tut9']))
{
	$tut9=$_POST['tut9'];
	$tut.=",`tut9`";
}
if(isset($_POST['tut10']))
{
	$tut10=$_POST['tut10'];
	$tut.=",`tut10`";
}
if(isset($_POST['tut11']))
{
	$tut11=$_POST['tut11'];
	$tut.=",`tut11`";
}
if(isset($_POST['tut12']))
{
	$tut12=$_POST['tut12'];
	$tut.=",`tut12`";
}
if(isset($_POST['tut13']))
{
	$tut13=$_POST['tut13'];
	$tut.=",`tut13`";
}


// echo $am;


$sql="";
foreach( $co_id as $key => $n ) 
{
		$sql.="INSERT INTO tutorial_co VALUES('$n','$course_id','$tut1[$key]','$tut2[$key]','$tut3[$key]','$tut4[$key]','$tut5[$key]','$tut6[$key]','$tut7[$key]','$tut8[$key]','$tut9[$key]','$tut10[$key]','$tut11[$key]','$tut12[$key]','$tut13[$key]',100,'$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: tutorial_mapping.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: tutorial_mapping.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 