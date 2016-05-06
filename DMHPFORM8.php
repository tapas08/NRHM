<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 1; $i <= 8; $i++){
		$form_8 = $db->insert("DMHP_form_8", array(
				'duration' => Input::get("duration_$i"),
				'male' => Input::get("male_$i"),
				'female' => Input::get("female_$i"),
				'child' => Input::get("child_$i"),
				'total' => Input::get("total_$i")
			));

		if (!$form_8){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 8',
			'date' => date('m-d-Y'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 8',
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

<!DOCTYPE html>
<html>
<head>
	<title>FORM 8</title>
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
			<h4>Form 8</h4>
			<p>Duration of Stay</p>
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
			<center><h4>Duration of Stay</h4></center>		
		<thead>
			<td></td>
			<td><u>MALE</u></td>
			<td><u>FEMALE</u></td>
			<td><u>CHILD</u></td>
			<td><u>TOTAL</u></td>
		</thead>	

		<tbody>

		<tr>
			<td><u><textarea name="duration_1" id="duration_1" class="form-control" cols="25" rows="1" readonly>0 MONTH TO 3 </textarea></u></td>
			<td><input type="number" name="male_1" id="male_1" class="form-control"></td>
			<td><input type="number" name="female_1" id="female_1" class="form-control"></td>
			<td><input type="number" name="child_1" id="child_1" class="form-control"></td>
			<td><input type="number" name="total_1" id="total_1" class="form-control"></td>	
		</tr>

		<tr>
			<td><u><textarea name="duration_2" id="duration_2" class="form-control" cols="25" rows="1" readonly>3 TO 6 MONTH </textarea></u></td>
			<td><input type="number" name="male_2" id="male_2" class="form-control"></td>
			<td><input type="number" name="female_2" id="female_2" class="form-control"></td>
			<td><input type="number" name="child_2" id="child_2" class="form-control"></td>
			<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_3" id="duration_3" class="form-control" cols="25" rows="1" readonly>6 TO 12 MONTH</textarea></u></td>
			<td><input type="number" name="male_3" id="male_3" class="form-control"></td>
			<td><input type="number" name="female_3" id="female_3" class="form-control"></td>
			<td><input type="number" name="child_3" id="child_3" class="form-control"></td>
			<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_4" id="duration_4" class="form-control" cols="25" rows="1" readonly>1 TO 2 YEARS</textarea></u></td>
			<td><input type="number" name="male_4" id="male_4" class="form-control"></td>
			<td><input type="number" name="female_4" id="female_4" class="form-control"></td>
			<td><input type="number" name="child_4" id="child_4" class="form-control"></td>
			<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_5" id="duration_5" class="form-control" cols="25" rows="1" readonly>2 TO 5 YEARS</textarea></u></td>
			<td><input type="number" name="male_5" id="male_5" class="form-control"></td>
			<td><input type="number" name="female_5" id="female_5" class="form-control"></td>
			<td><input type="number" name="child_5" id="child_5" class="form-control"></td>
			<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_6" id="duration_6" class="form-control" cols="25" rows="1" readonly>5 TO 10 YEARS</textarea></u></td>
			<td><input type="number" name="male_6" id="male_6" class="form-control"></td>
			<td><input type="number" name="female_6" id="female_6" class="form-control"></td>
			<td><input type="number" name="child_6" id="child_6" class="form-control"></td>
			<td><input type="number" name="total_6" id="total_6" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_7" id="duration_7" class="form-control" cols="25" rows="1" readonly>10 TO 20 YEARS</textarea></u></td>
			<td><input type="number" name="male_7" id="male_7" class="form-control"></td>
			<td><input type="number" name="female_7" id="female_7" class="form-control"></td>
			<td><input type="number" name="child_7" id="child_7" class="form-control"></td>
			<td><input type="number" name="total_7" id="total_7" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="duration_8" id="duration_8" class="form-control" cols="25" rows="1" readonly>ABOVE 20 YEARS</textarea></u></td>
			<td><input type="number" name="male_8" id="male_8" class="form-control"></td>
			<td><input type="number" name="female_8" id="female_8" class="form-control"></td>
			<td><input type="number" name="child_8" id="child_8" class="form-control"></td>
			<td><input type="number" name="total_8" id="total_8" class="form-control"></td>
		</tr>

		<tr>
			<td><u><textarea name="total_field" id="total_field" class="form-control" cols="25" rows="1" readonly>TOTAL</textarea></u></td>
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