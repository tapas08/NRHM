<?php
require_once 'core/init.php';
$errors = [];

if (Input::exists()){
	$db = DB::getInstance();
	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 1; $i <= 8; $i++){
		$form_2 = $db->insert('DMHP_form_2', array(

			'diagnoses' => Input::get("diag_name_$i"),
			'visits' => Input::get("visit_$i"),
			'home_Care' => Input::get("home_care_$i"),
			'admission' => Input::get("admission_$i"),
			'motivated' => Input::get("motivation_$i"),
			'migrated' => Input::get("migrated_$i"),
			'died' => Input::get("died_$i"),
			'total' => Input::get("total_1"),
			'doctors_Id' => $doctors_id,
			'date' => date("m-d-Y"),
			'month' => Input::get('month')
			));

		if (!$form_2){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}


	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 2',
			'date' => date('m-d-Y'),
			'population' => Input::get('population'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 2',
			'no_of_subcenters' => Input::get('no_of_subcenters'),
			'month' => Input::get('month'),
			'doctors_Id' => $doctors_id
		));

	if ($doctors_entry){
		header('Location:DMHPFORM3.php');
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FORM 2</title>
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
		<form action="" method="POST" id="DMHP_form">
		<center>
			<h2>Monitoring of DMHP</h2>
			<h4>Form 2</h4>
			<p align="center">Follow up action initiated by PHC/PHU/GAD staff for drop out cases</p>
		</center>
		<br>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="doctor_name">Name of Doctor</label>
				</div>
				<div class="col-md-7">
					<input type="text" id="doctor_name" name="doctor_name" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="unit">Name of PHC/Unit</label>
				</div>
				<div class="col-md-7">
					<input type="text" id="unit" name="unit" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-12 report_details">
			<div class="form-group col-md-6">
				<div class="col-md-5">
					<label for="no_of_subcenters">Numbers of sub centers </label>
				</div>
				<div class="col-md-7">
					<input type="text" id="no_of_subcenters" name="no_of_subcenters" class="form-control">
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

		<table class="table table-bordered">

			<thead>
				<td>Diagnosis</td>
				<td>Visit by the HW/ANM to educate & motivate Patients</td>
				<td>Home care - Counseling education domiciliary care monitoring side effects & networking</td>
				<td>Admission to In-Patient facility after review</td>
				<td>Motivation through grampanechyat & others in the community</td>
				<td>Migrated</td>
				<td>Died</td>
				<td>Total</td>
			</thead>

			<tbody>
				<tr>
					<td><textarea name="diag_name_1" id="diag_name_1" class="form-control" cols="25" rows="3" readonly>Organic Mental Disorder</textarea></td>
					<td><input type="number" name="visit_1" id="visit_1" class="form-control"></td>
					<td><input type="number" name="home_care_1" id="home_care_1" class="form-control"></td>
					<td><input type="number" name="admission_1" id="admission_1" class="form-control"></td>
					<td><input type="number" name="motivation_1" id="motivation_1" class="form-control"></td>
					<td><input type="number" name="migrated_1" id="migrated_1" class="form-control"></td>
					<td><input type="number" name="died_1" id="died_1" class="form-control"></td>
					<td><input type="number" name="total_1" id="total_1" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_2" id="diag_name_2" class="form-control" cols="25" rows="1" readonly>Psychosis</textarea></td>
					<td><input type="number" name="visit_2" id="visit_2" class="form-control"></td>
					<td><input type="number" name="home_care_2" id="home_care_2" class="form-control"></td>
					<td><input type="number" name="admission_2" id="admission_2" class="form-control"></td>
					<td><input type="number" name="motivation_2" id="motivation_2" class="form-control"></td>
					<td><input type="number" name="migrated_2" id="migrated_2" class="form-control"></td>
					<td><input type="number" name="died_2" id="died_2" class="form-control"></td>
					<td><input type="number" name="total_2" id="total_2" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_3" id="diag_name_3" class="form-control" cols="29" rows="1" readonly>Depression</textarea></td>
					<td><input type="number" name="visit_3" id="visit_3" class="form-control"></td>
					<td><input type="number" name="home_care_3" id="home_care_3" class="form-control"></td>
					<td><input type="number" name="admission_3" id="admission_3" class="form-control"></td>
					<td><input type="number" name="motivation_3" id="motivation_3" class="form-control"></td>
					<td><input type="number" name="migrated_3" id="migrated_3" class="form-control"></td>
					<td><input type="number" name="died_3" id="died_3" class="form-control"></td>
					<td><input type="number" name="total_3" id="total_3" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_4" id="diag_name_4" class="form-control" cols="25" rows="1" readonly>Neurosis</textarea></td>
					<td><input type="number" name="visit_4" id="visit_4" class="form-control"></td>
					<td><input type="number" name="home_care_4" id="home_care_4" class="form-control"></td>
					<td><input type="number" name="admission_4" id="admission_4" class="form-control"></td>
					<td><input type="number" name="motivation_4" id="motivation_4" class="form-control"></td>
					<td><input type="number" name="migrated_4" id="migrated_4" class="form-control"></td>
					<td><input type="number" name="died_4" id="died_4" class="form-control"></td>
					<td><input type="number" name="total_4" id="total_4" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_5" id="diag_name_5" class="form-control" cols="25" rows="1" readonly>Epilepsy</textarea></td>
					<td><input type="number" name="visit_5" id="visit_5" class="form-control"></td>
					<td><input type="number" name="home_care_5" id="home_care_5" class="form-control"></td>
					<td><input type="number" name="admission_5" id="admission_5" class="form-control"></td>
					<td><input type="number" name="motivation_5" id="motivation_5" class="form-control"></td>
					<td><input type="number" name="migrated_5" id="migrated_5" class="form-control"></td>
					<td><input type="number" name="died_5" id="died_5" class="form-control"></td>
					<td><input type="number" name="total_5" id="total_5" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_6" id="diag_name_6" class="form-control" cols="25" rows="1" readonly>M.R.</textarea></td>
					<td><input type="number" name="visit_6" id="visit_6" class="form-control"></td>
					<td><input type="number" name="home_care_6" id="home_care_6" class="form-control"></td>
					<td><input type="number" name="admission_6" id="admission_6" class="form-control"></td>
					<td><input type="number" name="motivation_6" id="motivation_6" class="form-control"></td>
					<td><input type="number" name="migrated_6" id="migrated_6" class="form-control"></td>
					<td><input type="number" name="died_6" id="died_6" class="form-control"></td>
					<td><input type="number" name="total_6" id="total_6" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_7" id="diag_name_7" class="form-control" cols="25" rows="2" readonly>Substance Abuse</textarea></td>
					<td><input type="number" name="visit_7" id="visit_7" class="form-control"></td>
					<td><input type="number" name="home_care_7" id="home_care_7" class="form-control"></td>
					<td><input type="number" name="admission_7" id="admission_7" class="form-control"></td>
					<td><input type="number" name="motivation_7" id="motivation_7" class="form-control"></td>
					<td><input type="number" name="migrated_7" id="migrated_7" class="form-control"></td>
					<td><input type="number" name="died_7" id="died_7" class="form-control"></td>
					<td><input type="number" name="total_7" id="total_7" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_8" id="diag_name_8" class="form-control" cols="25" rows="3" readonly>Child Mental Health Problems</textarea></td>
					<td><input type="number" name="visit_8" id="visit_8" class="form-control"></td>
					<td><input type="number" name="home_care_8" id="home_care_8" class="form-control"></td>
					<td><input type="number" name="admission_8" id="admission_8" class="form-control"></td>
					<td><input type="number" name="motivation_8" id="motivation_8" class="form-control"></td>
					<td><input type="number" name="migrated_8" id="migrated_8" class="form-control"></td>
					<td><input type="number" name="died_8" id="died_8" class="form-control"></td>
					<td><input type="number" name="total_8" id="total_8" class="form-control"></td>
				</tr>

				<tr>
					<td><textarea name="diag_name_9" id="diag_name_9" class="form-control" cols="25" rows="1" readonly>Total</textarea></td>
					<td><input type="number" name="visit_total" id="visit_total" class="form-control"></td>
					<td><input type="number" name="home_care_total" id="home_care_total" class="form-control"></td>
					<td><input type="number" name="admission_total" id="admission_total" class="form-control"></td>
					<td><input type="number" name="motivation_total" id="motivation_total" class="form-control"></td>
					<td><input type="number" name="migrated_total" id="migrated_total" class="form-control"></td>
					<td><input type="number" name="died_total" id="died_total" class="form-control"></td>
					<td><input type="number" name="total_9" id="total_9" class="form-control"></td>
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