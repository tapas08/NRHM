<?php 
require_once 'core/init.php';
$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	for ($i = 1; $i <= 7; $i++){
		$suicide = $db->insert("suicide_form", array(
				'age_group' => Input::get("age_group_$i"),
				'student' => Input::get("student_$i"),
				'farmers' => Input::get("farmers_$i"),
				'labor' => Input::get("labor_$i"),
				'others' => Input::get("others_$i"),
				'total' => Input::get("total_$i"),
				'progressive' => Input::get("progressive_$i"),
				'male' => Input::get("male_$i"),
				'female' => Input::get("female_$i"),
				'total_attended' => Input::get("total_attended_$i"),
				'counsel' => Input::get("counsel_$i"),
				'medicine' => Input::get("medicine_$i"),
				'ect' => Input::get("ect_$i"),
				'recovered' => Input::get("recovered_$i"),
				'month' => Input::get('month')
			));

		if (!$suicide){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Suicide Prevention Clinic</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	
	<?php 
		require_once 'templates/header.php';
		require_once 'templates/navbar.php'
	?>

	<section class="container-fluid col-md-12">
	<?php
		if (count($errors) > 0){
			foreach ($errors as $error){
				echo "<p>$error</p>";
			}
		}
	?>
		<form action="" method="POST" id="suicide">
			<center>
				<h3>Psychiatric Department</h3>
				<h4>SUICIDE PREVENTION CLINIC</h4>
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
			</div>

			<table class="table table-bordered">
				<thead>
					<td>Age Group</td>
					<td>
						<center>Category of patients</center>
						<table class="table table-bordered">
							<thead>
								<td>Students</td>
								<td>Farmers</td>
								<td>Labor</td>
								<td>Others</td>
							</thead>
						</table>
					</td>
					<td>Total</td>
					<td>Progressive</td>
					<td>
						<center>Patients Attended</center>
						<table class="table table-bordered">
							<thead>
								<td>Male</td>
								<td>Female</td>
								<td>Total</td>
							</thead>
						</table>
					</td>
					<td>
						<center>Services Provided</center>
						<table class="table table-bordered">
							<thead>
								<td>Counseling</td>
								<td>Medicine</td>
								<td>ECT</td>
							</thead>
						</table>
					</td>
					<td>Patients Recovered</td>
				</thead>

				<tbody>
					<tr>
						<td><input type="text" name="age_group_1" id="age_group_1" class="form-control" value="7-12" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_1" id="student_1" class="form-control"></td>
									<td><input type="number" name="farmers_1" id="farmers_1" class="form-control"></td>
									<td><input type="number" name="labor_1" id="labor_1" class="form-control"></td>
									<td><input type="number" name="others_1" id="others_1" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_1" id="total_1" class="form-control"></td>
						<td><input type="number" name="progressive_1" id="progressive_1" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_1" id="male_1" class="form-control"></td>
									<td><input type="number" name="female_1" id="female_1" class="form-control"></td>
									<td><input type="number" name="total_attended_1" id="total_attended_1" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_1" id="counsel_1" class="form-control"></td>
									<td><input type="number" name="medicine_1" id="medicine_1" class="form-control"></td>
									<td><input type="number" name="ect_1" id="ect_1" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_1" id="recovered_1" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_2" id="age_group_2" class="form-control" value="12-20" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_2" id="student_2" class="form-control"></td>
									<td><input type="number" name="farmers_2" id="farmers_2" class="form-control"></td>
									<td><input type="number" name="labor_2" id="labor_2" class="form-control"></td>
									<td><input type="number" name="others_2" id="others_2" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
						<td><input type="number" name="progressive_2" id="progressive_2" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_2" id="male_2" class="form-control"></td>
									<td><input type="number" name="female_2" id="female_2" class="form-control"></td>
									<td><input type="number" name="total_attended_2" id="total_attended_2" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_2" id="counsel_2" class="form-control"></td>
									<td><input type="number" name="medicine_2" id="medicine_2" class="form-control"></td>
									<td><input type="number" name="ect_2" id="ect_2" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_2" id="recovered_2" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_3" id="age_group_3" class="form-control" value="21-30" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_3" id="student_3" class="form-control"></td>
									<td><input type="number" name="farmers_3" id="farmers_3" class="form-control"></td>
									<td><input type="number" name="labor_3" id="labor_3" class="form-control"></td>
									<td><input type="number" name="others_3" id="others_3" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
						<td><input type="number" name="progressive_3" id="progressive_3" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_3" id="male_3" class="form-control"></td>
									<td><input type="number" name="female_3" id="female_3" class="form-control"></td>
									<td><input type="number" name="total_attended_3" id="total_attended_3" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_3" id="counsel_3" class="form-control"></td>
									<td><input type="number" name="medicine_3" id="medicine_3" class="form-control"></td>
									<td><input type="number" name="ect_3" id="ect_3" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_3" id="recovered_3" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_4" id="age_group_4" class="form-control" value="31-40" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_4" id="student_4" class="form-control"></td>
									<td><input type="number" name="farmers_4" id="farmers_4" class="form-control"></td>
									<td><input type="number" name="labor_4" id="labor_4" class="form-control"></td>
									<td><input type="number" name="others_4" id="others_4" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
						<td><input type="number" name="progressive_4" id="progressive_4" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_4" id="male_4" class="form-control"></td>
									<td><input type="number" name="female_4" id="female_4" class="form-control"></td>
									<td><input type="number" name="total_attended_4" id="total_attended_4" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_4" id="counsel_4" class="form-control"></td>
									<td><input type="number" name="medicine_4" id="medicine_4" class="form-control"></td>
									<td><input type="number" name="ect_4" id="ect_4" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_4" id="recovered_4" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_5" id="age_group_5" class="form-control" value="41-50" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_5" id="student_5" class="form-control"></td>
									<td><input type="number" name="farmers_5" id="farmers_5" class="form-control"></td>
									<td><input type="number" name="labor_5" id="labor_5" class="form-control"></td>
									<td><input type="number" name="others_5" id="others_5" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
						<td><input type="number" name="progressive_5" id="progressive_5" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_5" id="male_5" class="form-control"></td>
									<td><input type="number" name="female_5" id="female_5" class="form-control"></td>
									<td><input type="number" name="total_attended_5" id="total_attended_5" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_5" id="counsel_5" class="form-control"></td>
									<td><input type="number" name="medicine_5" id="medicine_5" class="form-control"></td>
									<td><input type="number" name="ect_5" id="ect_5" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_5" id="recovered_5" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_6" id="age_group_6" class="form-control" value="51-60" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_6" id="student_6" class="form-control"></td>
									<td><input type="number" name="farmers_6" id="farmers_6" class="form-control"></td>
									<td><input type="number" name="labor_6" id="labor_6" class="form-control"></td>
									<td><input type="number" name="others_6" id="others_6" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_6" id="total_6" class="form-control"></td>
						<td><input type="number" name="progressive_6" id="progressive_6" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_6" id="male_6" class="form-control"></td>
									<td><input type="number" name="female_6" id="female_6" class="form-control"></td>
									<td><input type="number" name="total_attended_6" id="total_attended_6" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_6" id="counsel_6" class="form-control"></td>
									<td><input type="number" name="medicine_6" id="medicine_6" class="form-control"></td>
									<td><input type="number" name="ect_6" id="ect_6" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_6" id="recovered_6" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="age_group_7" id="age_group_7" class="form-control" value=">60" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_7" id="student_7" class="form-control"></td>
									<td><input type="number" name="farmers_7" id="farmers_7" class="form-control"></td>
									<td><input type="number" name="labor_7" id="labor_7" class="form-control"></td>
									<td><input type="number" name="others_7" id="others_7" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_7" id="total_7" class="form-control"></td>
						<td><input type="number" name="progressive_7" id="progressive_7" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_7" id="male_7" class="form-control"></td>
									<td><input type="number" name="female_7" id="female_7" class="form-control"></td>
									<td><input type="number" name="total_attended_7" id="total_attended_7" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_7" id="counsel_7" class="form-control"></td>
									<td><input type="number" name="medicine_7" id="medicine_7" class="form-control"></td>
									<td><input type="number" name="ect_7" id="ect_7" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_7" id="recovered_7" class="form-control"></td>
					</tr>

					<tr>
						<td><input type="text" name="total" id="total" class="form-control" value="total" readonly></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="student_total" id="student_total" class="form-control"></td>
									<td><input type="number" name="farmers_total" id="farmers_total" class="form-control"></td>
									<td><input type="number" name="labor_total" id="labor_total" class="form-control"></td>
									<td><input type="number" name="others_total" id="others_total" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="total_total" id="total_total" class="form-control"></td>
						<td><input type="number" name="progressive_total" id="progressive_total" class="form-control"></td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="male_total" id="male_total" class="form-control"></td>
									<td><input type="number" name="female_total" id="female_total" class="form-control"></td>
									<td><input type="number" name="total_attended_total" id="total_attended_total" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td>
							<table class="table-bordered">
								<tbody>
									<td><input type="number" name="counsel_total" id="counsel_total" class="form-control"></td>
									<td><input type="number" name="medicine_total" id="medicine_total" class="form-control"></td>
									<td><input type="number" name="ect_total" id="ect_total" class="form-control"></td>
								</tbody>
							</table>
						</td>
						<td><input type="number" name="recovered_total" id="recovered_total" class="form-control"></td>
					</tr>

				</tbody>

			</table>

		</form>
		<input type="submit" name="submit" id="name" form="suicide" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm('suicide');">
	</section>
	
	<script src="script/jquery-2.1.3.min.js"></script>
	<script src="script/bootstrap.min.js"></script>
	<script src="script/print.js"></script>
</body>
</html>