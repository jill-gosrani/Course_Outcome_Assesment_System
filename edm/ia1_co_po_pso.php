<!DOCTYPE HTML>
<html> 
<head>
<title>SAKEC - Course Outcome Assessment System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
<!--//Metis Menu -->
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}

input:invalid {
  border: 1px solid red;
}
</style>
<!--pie-chart --><!-- index page sales reviews visitors pie chart -->
					<!-- //requried-jsfiles-for owl -->
</head> 
<body id="mainclass" class="cbp-spmenu-push-toright">
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		<?php
		include "theory_course_pages_sidebar.php";
		?>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
	
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="row">
			<h3 class="title1"><b>CO - Internal Assesment Mapping</b> (<?php echo $_SESSION['course_id']; ?>):</h3>
				<div class="form-three widget-shadow">
				<div class=" panel-body-inputin">
				<form id="co_am_form" onsubmit="return checkTotal()" action="ia1_co_po_pso_save.php" class="form-horizontal" enctype="multipart/form-data" method="POST">
				<div class="table-responsive bs-example widget-shadow" data-example-id="contextual-table">
				<table class="table table-bordered">				 
                
                <?php
				include 'login_config.php';
				//session_start();
				$branch_code=$_SESSION['branch_code'];
				$course_id=$_SESSION['course_id'];
				$term=$_SESSION['term'];
				$dept=$_SESSION["dept"];
                $pso=array();
                $co=array();
                $co_qry="SELECT * FROM `co_list` WHERE `co_id` LIKE '$course_id%'";
                $pso_qry="SELECT * FROM `pso` WHERE `branch_id`=$branch_code";
                $pso_result = mysqli_query($conn,$pso_qry);
                $co_result = mysqli_query($conn,$co_qry);

                if (mysqli_num_rows($co_result) > 0) 
				{
					while($co_row = mysqli_fetch_assoc($co_result))
					{
						$co[]=$co_row;
					}
                }

                if (mysqli_num_rows($pso_result) > 0) 
				{
					while($pso_row = mysqli_fetch_assoc($pso_result))
					{
						$pso[]=$pso_row;
					}
                }			
                ?>
                <thead class='table_header'>
				<!-- <th><center>Internal<Br>Assessment<Br> Number</center></th> -->
                <th><center>Internal<Br>Assessment<Br> Quetions</center></th>
				<th><center>Marks<Br>Allotted to<Br>each Question</center></th>
                <th><center>Blooms Taxonomy<Br>Level of Question</center></th>
				<th><center>Course Outcome</center></th>
                <th id='psoid'><center>PSOs</center></th>
                <th><center>Performance<Br>Indicator(PI) of<Br>PO</center></th>
				</thead>
                <tbody id="co_am">
                    <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1a";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control"  multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                    </tr>





                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1b";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                    </tr>





                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1c";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>




                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1d";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>







                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1e";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>





                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_1f";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "2";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>







                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_2a";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "5";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>







                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_2b";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "5";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>







                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_3a";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "5";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                        </td>
                        <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>




                <tr class='table_row1'>
                        <td><center><input type="text" name="IA1_q[]" class="form-control1" value="<?php echo "IA1_3b";?>" readonly></center></td>
                        <td><center><input type="text" name="marks[]" class="form-control1" value="<?php echo "5";?>" readonly></center></td>
                        <td><center><div class='form-group'><div class='col-md-8'><select name='b[]' class='form-control1' required='required'><option value=''>Select</option><option value='BL1'>BL1</option><option value='BL2'>BL2</option><option value='BL3'>BL3</option><option value='BL4'>BL4</option><option value='BL5'>BL5</option><option value='BL6'>BL6</option></center></td>
                        <td><div class="form-group1 col-md-8">
				<select id="pso_select" name="co[]" class='form-control1' required="required"><option value=''>Select</option>
				<?php
				for ($b = 0; $b < sizeof($co); $b++)
				{
					$co_no=$b+1;
					echo "<option value='".$co[$b]['co_no']."'>CO".$co_no."</option>";
				}
				?>	
				</select>
				</div>
                        	
                </td>
                <td id='psoid'><div class="form-group1 col-md-7 ">
				<select id="pso_select" name="pso[]" class="selectpicker form-control" multiple required="required">
				<?php
				for ($a = 0; $a < sizeof($pso); $a++)
				{
					$pso_no=$a+1;
					echo "<option value='".$pso[$a]['pso_id']."'>PSO".$pso_no."</option>";
				}
				?>	
				</select>
				</div>
				</td>
				<td><div class='form-group'><div class="col-md-12"><div class="input-group"><textarea name="pi_no[]" id="txtarea1" cols="50" rows="4" class="form-control1" required='required'></textarea></div></div></div></td>
                </tr>



                </tbody>
                </table> 

				<center><button type="reset" class="btn btn-default">Reset</button>   <button type="submit" class="btn btn-warning">Save</button></center>
				</form>
				</div>
				</form>
				<?php
				if(!empty($_GET['message']))
					echo $_GET['message'];
				?>
				</div>
				</div>
		</div>
		</div>
		<!--</div>-->
	<!--footer-->
	<div class="footer">
	   <p>&copy; 2020 <a target="_blank" href="http://shahandanchor.com/">Shah & Anchor Kutchhi Engineering College.</a> All Rights Reserved </p>		
	</div>
    <!--//footer-->
	</div>
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				if(document.getElementById("mainclass").className == "cbp-spmenu-push-toright")
					document.getElementById("mainclass").className = "cbp-spmenu-push";
				else if(document.getElementById("mainclass").className == "cbp-spmenu-push")
					document.getElementById("mainclass").className = "cbp-spmenu-push-toright";
				//classie.toggle(body, 'cbp-spmenu-push' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
			

			function calculateSum(w)
			{
				//alert(w.parentElement.parentElement.parentElement.parentElement.parentElement);
				var val1=Number(w.value);
				var sum=0;
				var rowcells=w.parentElement.parentElement.parentElement.parentElement.parentElement.cells.length;
				//alert(rowcells);
				var row=w.parentElement.parentElement.parentElement.parentElement.parentElement;
				for(i=2;i<rowcells-1;i++)
				{
					//alert(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
					sum+=Number(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].value);
					//alert(sum);
				}
				//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].nodeName);
				row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].value=sum;
				if(sum==100)
				{
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#90ee90";
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.color="#000000";
					//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
				}
				else
				{
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#ff0000";
					row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].style.color="#ffffff";
					//alert(row.cells[rowcells-1].childNodes[0].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
				}

			}

			function checkTotal()
			{
				var total=document.getElementsByName('total[]');
				for (var i = 0; i < total.length; i++)
				{ 
					var a = total[i].value; 
					//alert(a);
					if (a<100 || a>100)
					{
						alert("Sum of contribution of all assessment methods for each CO should not be less or greater than 100. Please check the values entered in the table.")
						return false;
					}
				}
			}

			function editRow(w)
			{
				//alert(w.parentElement.parentElement.parentElement.parentElement);
				document.getElementById("co_am_form").action = "co_am_update.php";
				var rowcells=w.parentElement.parentElement.parentElement.parentElement.cells.length;
				//alert(rowcells);
				var row=w.parentElement.parentElement.parentElement.parentElement;
				for(i=2;i<rowcells-1;i++)
				{
					row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].readOnly = false;
					row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].style.backgroundColor="#ffffff";
					//alert(row.cells[i].childNodes[0].childNodes[0].childNodes[0].childNodes[0].nodeName);
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	
	<!-- //side nav js -->
	
	<!-- for index page weekly sales java script -->
	<script src="js/SimpleChart.js"></script>
	<!-- //for index page weekly sales java script -->
	
	
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
	<!-- //Bootstrap Core JavaScript -->
	
</body>
</html>