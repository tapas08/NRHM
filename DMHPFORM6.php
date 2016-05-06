<?php 
require_once 'core/init.php';

$errors = [];

if (Input::exists()){
	$db = DB::getInstance();

	$doctors_id = substr(uniqid(), 0, 5);

	for ($i = 1; $i <= 12; $i++){
		$form_6 = $db->insert("DMHP_form_6", array(
				'domains' => Input::get("domain_$i"),
				'good' => Input::get("good_$i"),
				'satisfactory' => Input::get("satisfactory_$i"),
				'poor' => Input::get("poor_$i"),
				'difficulties' => Input::get("diff_elaboration_$i"),
				'date' => Input::get('date'),
				'doctors_Id' => $doctors_id
			));

		if (!$form_6){
			$errors[] = "Error! Please check if the entered value in field $i is correct.";
		}
	}

	$doctors_entry = $db->insert('doctors_details', array(
			'doctor_name' => Input::get('doctor_name'),
			'form' => 'DMHP FORM 6',
			'date' => date('m-d-Y'),
			'doctors_Id' => $doctors_id
		));

	$form_details = $db->insert('form_details', array(
			'form' => 'DMHP FORM 6',
			'report_of_phu' => Input::get('report_phu'),
			'doctors_Id' => $doctors_id
		));

	if ($doctors_entry){
		header("Location:DMHPFORM7.php");
	}else{
		$errors[] = "Error! Something went wrong please try again.";
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM 6</title>
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
			<h4>Form 6</h4>
			<p><u>Monitoring the effectiveness of DMHP</u></p>
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
					<label for="report_phu">Report of PHC/PHU/GAD </label>
				</div>
				<div class="col-md-6">
					<input type="text" id="report_phu" name="report_phu" class="form-control">
				</div>
			</div>
		</div>


		<table class="table table-bordered">

			<thead>

				<td>Domains</td>
				<td>Good</td>
				<td>Satisfactory</td>
				<td>Poor</td>
				<td>Any Specific difficulties please elaborate</td>

			</thead>	

			<tbody>

				<tr>
					<td><textarea name="domain_1" id="domain_1" class="form-control" cols="25" rows="1" readonly>Case records</textarea></td>
					<td><input type="checkbox" name="good_1" id="good_1" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_1" id="satisfactory_1" class="form-control"></td>
					<td><input type="checkbox" name="poor_1" id="poor_1" class="form-control"></td>
					<td><textarea name="diff_elaboration_1" id="diff_elaboration_1" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_2" id="domain_2" class="form-control" cols="25" rows="1" readonly>Availability Drugs</textarea></td>
					<td><input type="checkbox" name="good_2" id="good_2" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_2" id="satisfactory_2" class="form-control"></td>
					<td><input type="checkbox" name="poor_2" id="poor_2" class="form-control"></td>
					<td><textarea name="diff_elaboration_2" id="diff_elaboration_2" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_3" id="domain_3" class="form-control" cols="25" rows="1" readonly>Diagnostic ability of the Doctor</textarea></td>
					<td><input type="checkbox" name="good_3" id="good_3" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_3" id="satisfactory_3" class="form-control"></td>
					<td><input type="checkbox" name="poor_3" id="poor_3" class="form-control"></td>
					<td><textarea name="diff_elaboration_3" id="diff_elaboration_3" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_4" id="domain_4" class="form-control" cols="25" rows="1" readonly>Management of the PHC staff of the Doctor</textarea></td>
					<td><input type="checkbox" name="good_4" id="good_4" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_4" id="satisfactory_4" class="form-control"></td>
					<td><input type="checkbox" name="poor_4" id="poor_4" class="form-control"></td>
					<td><textarea name="diff_elaboration_4" id="diff_elaboration_4" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_5" id="domain_5" class="form-control" cols="25" rows="1" readonly>Quality of care provided in the PHC</textarea></td>
					<td><input type="checkbox" name="good_5" id="good_5" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_5" id="satisfactory_5" class="form-control"></td>
					<td><input type="checkbox" name="poor_5" id="poor_5" class="form-control"></td>
					<td><textarea name="diff_elaboration_5" id="diff_elaboration_5" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_6" id="domain_6" class="form-control" cols="25" rows="2" readonly>Coverage of persons with mental health problems in the community</textarea></td>
					<td><input type="checkbox" name="good_6" id="good_6" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_6" id="satisfactory_6" class="form-control"></td>
					<td><input type="checkbox" name="poor_6" id="poor_6" class="form-control"></td>
					<td><textarea name="diff_elaboration_6" id="diff_elaboration_6" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_7" id="domain_7" class="form-control" cols="25" rows="1" readonly>Integration of Mental Health into general health services</textarea></td>
					<td><input type="checkbox" name="good_7" id="good_7" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_7" id="satisfactory_7" class="form-control"></td>
					<td><input type="checkbox" name="poor_7" id="poor_7" class="form-control"></td>
					<td><textarea name="diff_elaboration_7" id="diff_elaboration_7" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_8" id="domain_8" class="form-control" cols="25" rows="1" readonly>Interaction between Patients & the Doctor</textarea></td>
					<td><input type="checkbox" name="good_8" id="good_8" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_8" id="satisfactory_8" class="form-control"></td>
					<td><input type="checkbox" name="poor_8" id="poor_8" class="form-control"></td>
					<td><textarea name="diff_elaboration_8" id="diff_elaboration_8" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_9" id="domain_9" class="form-control" cols="25" rows="1" readonly>Interaction between the doctor & the health workers</textarea></td>
					<td><input type="checkbox" name="good_9" id="good_9" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_9" id="satisfactory_9" class="form-control"></td>
					<td><input type="checkbox" name="poor_9" id="poor_9" class="form-control"></td>
					<td><textarea name="diff_elaboration_9" id="diff_elaboration_9" class="form-control" cols="25" rows="1"></textarea></td>			
				</tr>

				<tr>
					<td><textarea name="domain_10" id="domain_10" class="form-control" cols="25" rows="1" readonly>Provision of home care for patients in the PHC/PHU/GAD area</textarea></td>
					<td><input type="checkbox" name="good_10" id="good_10" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_10" id="satisfactory_10" class="form-control"></td>
					<td><input type="checkbox" name="poor_10" id="poor_10" class="form-control"></td>
					<td><textarea name="diff_elaboration_10" id="diff_elaboration_10" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_11" id="domain_11" class="form-control" cols="25" rows="2" readonly>Monthly review of the Mental health care in the PHC/PHU/GAD by the doctor</textarea></td>
					<td><input type="checkbox" name="good_11" id="good_11" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_11" id="satisfactory_11" class="form-control"></td>
					<td><input type="checkbox" name="poor_11" id="poor_11" class="form-control"></td>
					<td><textarea name="diff_elaboration_11" id="diff_elaboration_11" class="form-control" cols="25" rows="1"></textarea></td>
				</tr>

				<tr>
					<td><textarea name="domain_12" id="domain_12" class="form-control" cols="25" rows="1" readonly>IEC activities</textarea></td>
					<td><input type="checkbox" name="good_12" id="good_12" class="form-control"></td>
					<td><input type="checkbox" name="satisfactory_12" id="satisfactory_12" class="form-control"></td>
					<td><input type="checkbox" name="poor_12" id="poor_12" class="form-control"></td>
					<td><textarea name="diff_elaboration_12" id="diff_elaboration_12" class="form-control" cols="25" rows="1"></textarea></td>
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