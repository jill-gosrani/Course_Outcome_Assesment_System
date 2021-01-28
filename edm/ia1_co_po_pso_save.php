<?php
include 'login_config.php';
session_start();
// $co_id=$_POST['co_id'];
$term=$_SESSION['term'];
$course_id=$_SESSION['course_id'];
$IA1="";
$IA1_q=$marks=$b=$co=$pso=$pi_no=null;
if(isset($_POST['IA1_q']))
{
	$IA1_q=$_POST['IA1_q'];
	$IA1.="`IA1_q`";
} 
if(isset($_POST['marks']))
{
	$marks=$_POST['marks'];
	$IA1.=",`marks`";
}
if(isset($_POST['b']))
{
	$b=$_POST['b'];
	$IA1.=",`b`";
}
if(isset($_POST['co']))
{
	$co=$_POST['co'];
	$IA1.=",`co`";
}
if(isset($_POST['pso']))
{
	$pso=$_POST['pso'];
	$IA1.=",`pso`";
}
if(isset($_POST['pi_no']))
{
	$pi_no=$_POST['pi_no'];
	$IA1.=",`pi_no`";
}

// echo $IA1;
// echo '<br>';
// echo implode(',',$IA1_q);
// echo '<br>';
// echo implode(',',$marks);
// echo '<br>';
// echo implode(',',$b);
// echo '<br>';
// echo implode(',',$co);
// echo '<br>';
// echo implode(',',$pso);
// echo '<br>';
// echo implode(',',$pi_no);



$sql="";
foreach( $IA1_q as $key => $n ) 
{
		$sql.="INSERT INTO `co_am`(`co_id`, `course_id`, `am1`, `am2`, `am3`, `am4`, `am5`, `am6`, `am7`, `am8`, `am9`, `term`) VALUES('$n','$course_id','$am1[$key]','$am2[$key]','$am3[$key]','$am4[$key]','$am5[$key]','$am6[$key]','$am7[$key]','$am8[$key]','$am9[$key]','$term');";
}

if (mysqli_multi_query($conn, $sql))
{
	header("Location: co_am.php?message=<div class='alert alert-success' role='alert'><strong><center>Saved Successfully</center></strong></div>"); 
	exit();
} 
else
{
	header("Location: co_am.php?message=<div class='alert alert-danger' role='alert'><strong><center>Sorry please try again</center></strong></div>"); 
	exit();
}
?> 