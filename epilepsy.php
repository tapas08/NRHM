<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	for ($i = 1; $i <= 5; $i++){
		$epilepsy = $db->insert("epilepsy_form", array(
				'age_group' => Input::get("age_group_$i"),
				'general_seizure' => Input::get("age_group_$i"),
				'partial_seizure' => Input::get("partial_seizure_$i"),
				'seizure' => Input::get("seizure_$i"),
				'male' => Input::get("male_$i"),
				'female' => Input::get("female_$i"),
				'total' => Input::get("total_$i"),
				'month' => Input::get('month'),
				'date' => Input::get('date')
			));

		if (!$epilepsy){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Epilepsy Clinic</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
	<?php require_once 'templates/header.php'; ?>
	<?php require_once 'templates/navbar.php'; ?>

	<section class="container-fluid col-md-12">
	<?php
		if (count($errors) > 0){
			foreach ($errors as $error){
				echo "<p>$error</p>";
			}
		}
	?>
		<form action="" method="POST" id="epilepsy">
			
			<center>
				<h3>Psychiatric Department</h3>
				<h4>Epilepsy Clinic</h4>
				<p>General Hospital, WARDHA</p>
			</center>

			<div class="col-md-12">
				<div class="col-md-6">
					<div class="form-group pull-left">
						<span class="col-md-4">
							<label for="month">Month</label>
						</span>
						<span class="col-md-8">
							<input type="month" name="month" id="month" class="form-control">
						</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group pull-right">
						<span class="col-md-2">
							<label for="date">Date</label>
						</span>
						<span class="col-md-10">
							<input type="date" name="date" id="date" class="form-control">
						</span>
					</div>
				</div>
			</div>

			<table class="table table-bordered">
				<thead>
					<td>Age Group</td>
					<td>Generalized Seizure</td>
					<td>Partial Seizure</td>
					<td>Seizure due to Head<br> Injury, MR, etc</td>
					<td>Male</td>
					<td>Female</td>
					<td>Total</td>
				</thead>
				<tbody>
					<tr>
						<td><input type="text" name="age_group_1" id="age_group_1" class="form-control" value="7-12" readonly></td>
						<td><input type="number" name="general_seizure_1" id="general_seizure_1" class="form-control"></td>
						<td><input type="number" name="partial_seizure_1" id="partial_seizure_1" class="form-control"></td>
						<td><input type="number" name="seizure_1" id="seizure_1" class="form-control"></td>
						<td><input type="number" name="male_1" id="male_1" class="form-control"></td>
						<td><input type="number" name="female_1" id="female_1" class="form-control"></td>
						<td><input type="number" name="total_1" id="total_1" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_2" id="age_group_2" class="form-control" value="12-18" readonly></td>
						<td><input type="number" name="general_seizure_2" id="general_seizure_2" class="form-control"></td>
						<td><input type="number" name="partial_seizure_2" id="partial_seizure_2" class="form-control"></td>
						<td><input type="number" name="seizure_2" id="seizure_2" class="form-control"></td>
						<td><input type="number" name="male_2" id="male_2" class="form-control"></td>
						<td><input type="number" name="female_2" id="female_2" class="form-control"></td>
						<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_3" id="age_group_3" class="form-control" value="18-30" readonly></td>
						<td><input type="number" name="general_seizure_3" id="general_seizure_3" class="form-control"></td>
						<td><input type="number" name="partial_seizure_3" id="partial_seizure_3" class="form-control"></td>
						<td><input type="number" name="seizure_3" id="seizure_3" class="form-control"></td>
						<td><input type="number" name="male_3" id="male_3" class="form-control"></td>
						<td><input type="number" name="female_3" id="female_3" class="form-control"></td>
						<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_4" id="age_group_4" class="form-control" value="30-50" readonly></td>
						<td><input type="number" name="general_seizure_4" id="general_seizure_4" class="form-control"></td>
						<td><input type="number" name="partial_seizure_4" id="partial_seizure_4" class="form-control"></td>
						<td><input type="number" name="seizure_4" id="seizure_4" class="form-control"></td>
						<td><input type="number" name="male_4" id="male_4" class="form-control"></td>
						<td><input type="number" name="female_4" id="female_4" class="form-control"></td>
						<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_5" id="age_group_5" class="form-control" value="More than 50" readonly></td>
						<td><input type="number" name="general_seizure_5" id="general_seizure_5" class="form-control"></td>
						<td><input type="number" name="partial_seizure_5" id="partial_seizure_5" class="form-control"></td>
						<td><input type="number" name="seizure_5" id="seizure_5" class="form-control"></td>
						<td><input type="number" name="male_5" id="male_5" class="form-control"></td>
						<td><input type="number" name="female_5" id="female_5" class="form-control"></td>
						<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="total" id="total" class="form-control" value="total" readonly></td>
						<td><input type="number" name="general_seizure_total" id="general_seizure_total" class="form-control"></td>
						<td><input type="number" name="partial_seizure_total" id="partial_seizure_total" class="form-control"></td>
						<td><input type="number" name="seizure_total" id="seizure_total" class="form-control"></td>
						<td><input type="number" name="male_total" id="male_total" class="form-control"></td>
						<td><input type="number" name="female_total" id="female_total" class="form-control"></td>
						<td><input type="number" name="grand_total" id="grand_total" class="form-control"></td>
					</tr>

				</tbody>
			</table>

		</form>
		<input type="submit" name="submit" id="name" form="epilepsy" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm('epilepsy');">
	</section>

	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/print.js"></script>
</body>
</html>