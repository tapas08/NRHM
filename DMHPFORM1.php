<?php 

require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	$doctor_id = substr(uniqid(), 0, 5);

	for($i = 1; $i <= 8; $i++):
		$insert = $db->insert('DHMP_form_1', array(
				'diagnoses' => Input::get("diag_name_$i"),
				'old_Cases' => Input::get("diag_old_cases_$i"),
				'new_Cases' => Input::get("diag_new_cases_$i"),
				'total_Cases' => Input::get("diag_total_cases_$i"),
				'regular_Treatment' => Input::get("diag_regular_$i"),
				'dropped' => Input::get("diag_dropped_$i"),
				'irregular_Patients' => Input::get("diag_irregular_$i"),
				'recovered' => Input::get("diag_recovered_$i"),
				'dead' => Input::get("diag_dead_$i"),
				'migrated' =>Input::get("diag_migrated_$i"),
				'doctor_id' => $doctor_id,
				'month' => Input::get('month'),
				'date' => date('m-d-Y')
			));

		// If unable to insert
		// Save the message in an array
		if (!$insert){
			$errors[] = "Error! Please check if the entered data is valid.";
		}

	endfor;

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 1',
			'date' => date('m-d-Y'),
			'population' => Input::get('population')
		));

	if ($doctors_details){
		header('Location:DMHPFORM2.php');
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM 1</title>
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
		<center>
			<h2>Monitoring of DMHP</h2>
			<h4>Form 1</h4>
		</center>
		<br>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="doctor_name">Name of Doctor </label>
				</div>
				<div class="col-md-7">
					<input type="text" id="doctor_name" name="doctor_name" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="month">Report for the month of </label>
				</div>
				<div class="col-md-7">
					<input type="month" id="month" name="month" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="population">Total Population Covered </label>
				</div>
				<div class="col-md-7">
					<input type="text" id="population" name="population" class="form-control">
				</div>
			</div>
		</div>

		<form action="" method="POST">
		<table class="table table-bordered">
			<thead>
				<td>Diagnoses</td>
				<td>Total no. of Old Cases registered till last month</td>
				<td>Total no. of New Cases registered this month</td>
				<td>Total no. of cases registered</td>
				<td>No. of patients regular treatment</td>
				<td>First contact dropped</td>
				<td>Irregular patients</td>
				<td>No. who have recovered</td>
				<td>Dead</td>
				<td>Migrated</td>
			</thead>
			<tbody>
				<tr>
					<td><textarea name="diag_name_1" id="diag_name_1" class="form-control" cols="25" rows="3" readonly>Organic Mental Disorder</textarea></td>
					<td><input type="number" name="diag_old_cases_1" id="diag_old_cases_1" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_1" id="diag_new_cases_1" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_1" id="diag_total_cases_1" class="form-control"></td>
					<td><input type="number" name="diag_regular_1" id="diag_regular_1" class="form-control"></td>
					<td><input type="number" name="diag_dropped_1" id="diag_dropped_1" class="form-control"></td>
					<td><input type="number" name="diag_irregular_1" id="diag_irregular_1" class="form-control"></td>
					<td><input type="number" name="diag_recovered_1" id="diag_recovered_1" class="form-control"></td>
					<td><input type="number" name="diag_dead_1" id="diag_dead_1" class="form-control"></td>
					<td><input type="number" name="diag_migrated_1" id="diag_migrated_1" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_2" id="diag_name_2" class="form-control" cols="25" rows="3"  readonly>Psychosis/Schizophrenic</textarea></td>
					<td><input type="number" name="diag_old_cases_2" id="diag_old_cases_2" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_2" id="diag_new_cases_2" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_2" id="diag_total_cases_2" class="form-control"></td>
					<td><input type="number" name="diag_regular_2" id="diag_regular_2" class="form-control"></td>
					<td><input type="number" name="diag_dropped_2" id="diag_dropped_2" class="form-control"></td>
					<td><input type="number" name="diag_irregular_2" id="diag_irregular_2" class="form-control"></td>
					<td><input type="number" name="diag_recovered_2" id="diag_recovered_2" class="form-control"></td>
					<td><input type="number" name="diag_dead_2" id="diag_dead_2" class="form-control"></td>
					<td><input type="number" name="diag_migrated_2" id="diag_migrated_2" class="form-control"></td>
				</tr>

				<tr>
					<td><input name="diag_name_3" id="diag_name_3" class="form-control" value="Neurosis" readonly></td>
					<td><input type="number" name="diag_old_cases_3" id="diag_old_cases_3" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_3" id="diag_new_cases_3" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_3" id="diag_total_cases_3" class="form-control"></td>
					<td><input type="number" name="diag_regular_3" id="diag_regular_3" class="form-control"></td>
					<td><input type="number" name="diag_dropped_3" id="diag_dropped_3" class="form-control"></td>
					<td><input type="number" name="diag_irregular_3" id="diag_irregular_3" class="form-control"></td>
					<td><input type="number" name="diag_recovered_3" id="diag_recovered_3" class="form-control"></td>
					<td><input type="number" name="diag_dead_3" id="diag_dead_3" class="form-control"></td>
					<td><input type="number" name="diag_migrated_3" id="diag_migrated_3" class="form-control"></td>
				</tr>


				<tr>
					<td><input name="diag_name_4" id="diag_name_4" class="form-control" value="Depression" readonly></td>
					<td><input type="number" name="diag_old_cases_4" id="diag_old_cases_4" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_4" id="diag_new_cases_4" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_4" id="diag_total_cases_4" class="form-control"></td>
					<td><input type="number" name="diag_regular_4" id="diag_regular_4" class="form-control"></td>
					<td><input type="number" name="diag_dropped_4" id="diag_dropped_4" class="form-control"></td>
					<td><input type="number" name="diag_irregular_4" id="diag_irregular_4" class="form-control"></td>
					<td><input type="number" name="diag_recovered_4" id="diag_recovered_4" class="form-control"></td>
					<td><input type="number" name="diag_dead_4" id="diag_dead_4" class="form-control"></td>
					<td><input type="number" name="diag_migrated_4" id="diag_migrated_4" class="form-control"></td>
				</tr>


				<tr>
					<td><input name="diag_name_5" id="diag_name_5" class="form-control" value="Epilepsy" readonly></td>
					<td><input type="number" name="diag_old_cases_5" id="diag_old_cases_5" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_5" id="diag_new_cases_5" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_5" id="diag_total_cases_5" class="form-control"></td>
					<td><input type="number" name="diag_regular_5" id="diag_regular_5" class="form-control"></td>
					<td><input type="number" name="diag_dropped_5" id="diag_dropped_5" class="form-control"></td>
					<td><input type="number" name="diag_irregular_5" id="diag_irregular_5" class="form-control"></td>
					<td><input type="number" name="diag_recovered_5" id="diag_recovered_5" class="form-control"></td>
					<td><input type="number" name="diag_dead_5" id="diag_dead_5" class="form-control"></td>
					<td><input type="number" name="diag_migrated_5" id="diag_migrated_5" class="form-control"></td>
				</tr>

				<tr>
					<td><input name="diag_name_6" id="diag_name_6" class="form-control" value="M R" readonly></td>
					<td><input type="number" name="diag_old_cases_6" id="diag_old_cases_6" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_6" id="diag_new_cases_6" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_6" id="diag_total_cases_6" class="form-control"></td>
					<td><input type="number" name="diag_regular_6" id="diag_regular_6" class="form-control"></td>
					<td><input type="number" name="diag_dropped_6" id="diag_dropped_6" class="form-control"></td>
					<td><input type="number" name="diag_irregular_6" id="diag_irregular_6" class="form-control"></td>
					<td><input type="number" name="diag_recovered_6" id="diag_recovered_6" class="form-control"></td>
					<td><input type="number" name="diag_dead_6" id="diag_dead_6" class="form-control"></td>
					<td><input type="number" name="diag_migrated_6" id="diag_migrated_6" class="form-control"></td>
				</tr>


				<tr>
					<td><input name="diag_name_7" id="diag_name_7" class="form-control" value="Substance" readonly></td>
					<td><input type="number" name="diag_old_cases_7" id="diag_old_cases_7" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_7" id="diag_new_cases_7" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_7" id="diag_total_cases_7" class="form-control"></td>
					<td><input type="number" name="diag_regular_7" id="diag_regular_7" class="form-control"></td>
					<td><input type="number" name="diag_dropped_7" id="diag_dropped_7" class="form-control"></td>
					<td><input type="number" name="diag_irregular_7" id="diag_irregular_7" class="form-control"></td>
					<td><input type="number" name="diag_recovered_7" id="diag_recovered_7" class="form-control"></td>
					<td><input type="number" name="diag_dead_7" id="diag_dead_7" class="form-control"></td>
					<td><input type="number" name="diag_migrated_7" id="diag_migrated_7" class="form-control"></td>
				</tr>


				<tr>
					<td><input name="diag_name_8" id="diag_name_8" class="form-control" value="Substance" readonly></td>
					<td><input type="number" name="diag_old_cases_8" id="diag_old_cases_8" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_8" id="diag_new_cases_8" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_8" id="diag_total_cases_8" class="form-control"></td>
					<td><input type="number" name="diag_regular_8" id="diag_regular_8" class="form-control"></td>
					<td><input type="number" name="diag_dropped_8" id="diag_dropped_8" class="form-control"></td>
					<td><input type="number" name="diag_irregular_8" id="diag_irregular_8" class="form-control"></td>
					<td><input type="number" name="diag_recovered_8" id="diag_recovered_8" class="form-control"></td>
					<td><input type="number" name="diag_dead_8" id="diag_dead_8" class="form-control"></td>
					<td><input type="number" name="diag_migrated_8" id="diag_migrated_8" class="form-control"></td>
				</tr>


				<tr>
					<td><textarea name="diag_name_9" id="diag_name_9" class="form-control" cols="20" rows="2" readonly>Abuse/Addiction</textarea></td>
					<td><input type="number" name="diag_old_cases_9" id="diag_old_cases_9" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_9" id="diag_new_cases_9" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_9" id="diag_total_cases_9" class="form-control"></td>
					<td><input type="number" name="diag_regular_9" id="diag_regular_9" class="form-control"></td>
					<td><input type="number" name="diag_dropped_9" id="diag_dropped_9" class="form-control"></td>
					<td><input type="number" name="diag_irregular_9" id="diag_irregular_9" class="form-control"></td>
					<td><input type="number" name="diag_recovered_9" id="diag_recovered_9" class="form-control"></td>
					<td><input type="number" name="diag_dead_9" id="diag_dead_9" class="form-control"></td>
					<td><input type="number" name="diag_migrated_9" id="diag_migrated_9" class="form-control"></td>
				</tr>



				<tr>
					<td><input name="diag_name_10" id="diag_name_10" class="form-control" value="Other" readonly></td>
					<td><input type="number" name="diag_old_cases_10" id="diag_old_cases_10" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_10" id="diag_new_cases_10" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_10" id="diag_total_cases_10" class="form-control"></td>
					<td><input type="number" name="diag_regular_10" id="diag_regular_10" class="form-control"></td>
					<td><input type="number" name="diag_dropped_10" id="diag_dropped_10" class="form-control"></td>
					<td><input type="number" name="diag_irregular_10" id="diag_irregular_10" class="form-control"></td>
					<td><input type="number" name="diag_recovered_10" id="diag_recovered_10" class="form-control"></td>
					<td><input type="number" name="diag_dead_10" id="diag_dead_10" class="form-control"></td>
					<td><input type="number" name="diag_migrated_10" id="diag_migrated_10" class="form-control"></td>
				</tr>

				<tr>
					<td><input name="diag_name_11" id="diag_name_11" class="form-control" value="Total" readonly></td>
					<td><input type="number" name="diag_old_cases_11" id="diag_old_cases_11" class="form-control"></td>
					<td><input type="number" name="diag_new_cases_11" id="diag_new_cases_11" class="form-control"></td>
					<td><input type="number" name="diag_total_cases_11" id="diag_total_cases_11" class="form-control"></td>
					<td><input type="number" name="diag_regular_11" id="diag_regular_11" class="form-control"></td>
					<td><input type="number" name="diag_dropped_11" id="diag_dropped_11" class="form-control"></td>
					<td><input type="number" name="diag_irregular_11" id="diag_irregular_11" class="form-control"></td>
					<td><input type="number" name="diag_recovered_11" id="diag_recovered_11" class="form-control"></td>
					<td><input type="number" name="diag_dead_11" id="diag_dead_11" class="form-control"></td>
					<td><input type="number" name="diag_migrated_11" id="diag_migrated_11" class="form-control"></td>
				</tr>

			</tbody>
		</table>
		<input type="submit" name="submit" id="name" class="btn btn-default" value="Save &amp; Continue">
		<input type="button" name="print" id="print" class="btn btn-default" value="Print" onclick="printForm();">
		</form>
	</section>

</body>
</html>

