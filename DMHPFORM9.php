<?php 
require_once 'core/init.php';

$errors = [];
$doctors_id = substr(uniqid(), 0, 5);

if (Input::exists()){
	$db = DB::getInstance();

	for ($i = 1; $i <= 7; $i++){
		$form_9 = $db->insert("DMHP_form_9", array(
				'institution' => Input::get("institution_$i"),
				'no_of_visits' => Input::get("no_of_visits_$i"),
				'male' => Input::get("male_$i"),
				'female' => Input::get("female_$i"),
				'child' => Input::get("child_$i"),
				'total' => Input::get("total_$i"),
				'date' => date('m-d-Y')
			));

		if (!$form_9){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 9',
			'date' => date('m-d-Y'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 9',
			'district' => Input::get('district'),
			'month' => Input::get('month'),
			'doctors_Id' => $doctors_id
		));

	if ($doctors_entry){
		header('Location:DMHPFORM9.php');
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}
}

?>
<html>
<head>
	<title>FORM 9</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<?php require_once 'templates/header.php'; ?>
	<?php require_once 'templates/navbar.php'; ?>


	<section class="container-fluid col-md-12">

		<?php
		if (count($errors) > 0){
			foreach ($errors as $error){
				echo "<p class='alert'>{$error}</p>";
			}
		}
		?>
		<form action="" method="POST" id='DMHP_form'>
		<center>
			<h4>Form 9</h4>
			<p>OUTREACH SERVICES</p>
		</center>
		<br>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="doctor_name">Name of Doctor </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="doctor_name" name="doctor_name" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="district">Name of District </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="district" name="district" class="form-control">
				</div>
			</div>
		</div>

		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-6">
					<label for="month">Report for the Month of</label>
				</div>
				<div class="col-md-6">
					<input type="month" id="month" name="month" class="form-control">
				</div>
			</div>
		</div>

		<table class="table table-bordered">
			<center><h4><u>OUTSEARCH SERVICES</u></h4></center>
		<thead>
			<td><u>S.NO</u></td>
			<td><u>Name Of Institution</u></td>
			<td><u>No. of Visits</u></td>
			<td><u>MALE</u></td>
			<td><u>FEMALE</u></td>
			<td><u>CHILD</u></td>
			<td><u>TOTAL</u></td>
		</thead>	

		<tbody>

			<tr>
				<td>1</td>
				<td><textarea name="institution_1" id="institution_1" class="form-control" cols="25" rows="1" readonly>jail</textarea></td>
				<td><input type="number" name="no_of_visits_1" id="no_of_visits_1" class="form-control"></td>
				<td><input type="number" name="male_1" id="male_1" class="form-control"></td>
				<td><input type="number" name="female_1" id="female_1" class="form-control"></td>
				<td><input type="number" name="child_1" id="child_1" class="form-control"></td>
				<td><input type="number" name="total_1" id="total_1" class="form-control"></td>
			</tr>

			<tr>
				<td>2</td>
				<td><textarea name="institution_2" id="institution_2" class="form-control" cols="25" rows="1" readonly>SDH</textarea></td>
				<td><input type="number" name="no_of_visits_2" id="no_of_visits_2" class="form-control"></td>
				<td><input type="number" name="male_2" id="male_2" class="form-control"></td>
				<td><input type="number" name="female_2" id="female_2" class="form-control"></td>
				<td><input type="number" name="child_2" id="child_2" class="form-control"></td>
				<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
			</tr>

			<tr>
				<td>3</td>
				<td><textarea name="institution_3" id="institution_3" class="form-control" cols="25" rows="1" readonly>RH/PHC</textarea></td>
				<td><input type="number" name="no_of_visits_3" id="no_of_visits_3" class="form-control"></td>
				<td><input type="number" name="male_3" id="male_3" class="form-control"></td>
				<td><input type="number" name="female_3" id="female_3" class="form-control"></td>
				<td><input type="number" name="child_3" id="child_3" class="form-control"></td>
				<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
			</tr>

			<tr>
				<td>4</td>
				<td><textarea name="institution_4" id="institution_4" class="form-control" cols="25" rows="1" readonly>Cottage</textarea></td>
				<td><input type="number" name="no_of_visits_4" id="no_of_visits_4" class="form-control"></td>
				<td><input type="number" name="male_4" id="male_4" class="form-control"></td>
				<td><input type="number" name="female_4" id="female_4" class="form-control"></td>
				<td><input type="number" name="child_4" id="child_4" class="form-control"></td>
				<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
			</tr>

			<tr>
				<td>5</td>
				<td><textarea name="institution_5" id="institution_5" class="form-control" cols="25" rows="1" readonly>Campus</textarea></td>
				<td><input type="number" name="no_of_visits_5" id="no_of_visits_5" class="form-control"></td>
				<td><input type="number" name="male_5" id="male_5" class="form-control"></td>
				<td><input type="number" name="female_5" id="female_5" class="form-control"></td>
				<td><input type="number" name="child_5" id="child_5" class="form-control"></td>
				<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
			</tr>

			<tr>
				<td>6</td>
				<td><textarea name="institution_6" id="institution_6" class="form-control" cols="25" rows="1" readonly>School</textarea></td>
				<td><input type="number" name="no_of_visits_6" id="no_of_visits_6" class="form-control"></td>
				<td><input type="number" name="male_6" id="male_6" class="form-control"></td>
				<td><input type="number" name="female_6" id="female_6" class="form-control"></td>
				<td><input type="number" name="child_6" id="child_6" class="form-control"></td>
				<td><input type="number" name="total_6" id="total_6" class="form-control"></td>
			</tr>

			<tr>
				<td>7</td>
				<td><textarea name="institution_7" id="institution_7" class="form-control" cols="25" rows="1" readonly>Others</textarea></td>
				<td><input type="number" name="no_of_visits_7" id="no_of_visits_7" class="form-control"></td>
				<td><input type="number" name="male_7" id="male_7" class="form-control"></td>
				<td><input type="number" name="female_7" id="female_7" class="form-control"></td>
				<td><input type="number" name="child_7" id="child_7" class="form-control"></td>
				<td><input type="number" name="total_7" id="total_7" class="form-control"></td>						
			</tr>

			<tr>
				<td>8</td>
				<td><textarea name="total" id="total" class="form-control" cols="25" rows="1" readonly>Total</textarea></td>
				<td><input type="number" name="no_of_visits_total" id="no_of_visits_total" class="form-control"></td>
				<td><input type="number" name="male_total" id="male_total" class="form-control"></td>
				<td><input type="number" name="female_total" id="female_total" class="form-control"></td>
				<td><input type="number" name="child_total" id="child_total" class="form-control"></td>
				<td><input type="number" name="grand_total" id="grand_total" class="form-control"></td>		
			</tr>

		</tbody>

		</table>

		</form>
		<input type="submit" name="submit" id="name" form="DMHP_form" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm('DMHP_form');">

	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/print.js"></script>
</body>
</html>